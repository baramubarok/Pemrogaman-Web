<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Provider;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUser extends Controller
{
    //
    public function index()
    {
        $user_profile = UserProfile::where('user_id', '=', Auth::user()->id)->first();
        $user_order = Order::where('user_id', '=', Auth::user()->id)->get();
        $shop = Provider::where('user_id', '=', Auth::user()->id)->first();
        $countOrder = Order::where([
            ['user_id', '=', Auth::user()->id],
            ['status', '=', 0]
        ])->count();
        $countPayment = Order::where([
            ['user_id', '=', Auth::user()->id],
            ['status', '=', 1],
            ['payment_method', '=', 1],
            ['payment_status', '=', 0]
        ])->count();
        $countProcess = Order::where([
            ['user_id', '=', Auth::user()->id],
            ['status', '=', 1],
            ['payment_status', '=', 1]
        ])->count();
        $countProcess2 = Order::where([
            ['user_id', '=', Auth::user()->id],
            ['status', '=', 1],
            ['payment_method', '=', 0],
            ['payment_status', '=', 0]
        ])->count();
        $countProcess = $countProcess + $countProcess2;
        $countComplete = Order::where([
            ['user_id', '=', Auth::user()->id],
            ['status', '=', 2]
        ])->count();
        $order = Order::where('user_id', '=', Auth::user()->id)->get();
        foreach ($order as $o) {
            $user = Provider::where('id', '=', $o->provider_id)->first();
            $o->user = $user;
        }
        return view('user.index', compact([
            'user_profile',
            'user_order',
            'shop',
            'countOrder',
            'countPayment',
            'countProcess',
            'countComplete',
            'order',
        ]));
    }

    public function updateProfile(Request $request)
    {
        $user_profile = UserProfile::where('user_id', '=', Auth::user()->id)->first();
        $user_shop = Provider::where('user_id', '=', Auth::user()->id)->first();
        $user_profile->update([
            'fullname' => $request->name,
            'gender' => $request->gender,
            'telp' => $request->telp,
            'address' => $request->address,
        ]);
        if ($request->photo != null) {
            if ($request->hasFile('photo')) {
                $p = $request->photo;
                $filename = Auth::user()->id . rand() . '.' . $p->getClientOriginalExtension();
                $p->move('data/images/user/profile', $filename);
                $user_profile->update([
                    'photo' => $filename,
                ]);
            }
        }
        $user_shop->update([
            'identity_type' => $request->identity_type,
            'identity_number' => $request->identity,
        ]);
        if ($request->hasFile('identity_photo') && $request->hasFile('identity_selfie_photo')) {

            $photo1 = $request->identity_photo;
            $filename1 = Auth::user()->id . 1 . rand() . '.' . $photo1->getClientOriginalExtension();
            $photo1->move('data/images/user/validation', $filename1);

            $photo2 = $request->identity_selfie_photo;
            $filename2 = Auth::user()->id . 2 . rand() . '.' . $photo2->getClientOriginalExtension();
            $photo2->move('data/images/user/validation', $filename2);

            $user_shop->update([
                'identity_photo' => $filename1,
                'identity_selfie_photo' => $filename2,
            ]);
        }
        return redirect()->back()->with(['success' => 'Data Berhasil Diupdate']);
    }

    public function updateOrder(Request $request)
    {
        $shop = Order::where('id', '=', $request->id)->first();
        $shop->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Diupdate']);
    }
}
