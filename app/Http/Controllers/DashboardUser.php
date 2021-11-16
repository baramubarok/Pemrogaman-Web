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
        return view('user.index', compact(['user_profile', 'user_order', 'shop']));
    }

    public function order()
    {
        return view('user.order');
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
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $filename = Auth::user()->id . rand() . '.' . $photo->getClientOriginalExtension();
            $photo->move('data/images/user/profile', $filename);
            $user_profile->update([
                'photo' => $filename,
            ]);
        }
        $user_shop->update([
            'identity_type' => $request->identity_type,
            'identity_number' => $request->identity,
        ]);
        if ($request->hasFile('identity_photo') && $request->hasFile('identity_selfie_photo')) {

            $photo1 = $request->identity_photo;
            $filename1 = Auth::user()->id . 1 . rand() . '.' . $photo->getClientOriginalExtension();
            $photo1->move('data/images/user/validation', $filename1);

            $photo2 = $request->identity_selfie_photo;
            $filename2 = Auth::user()->id . 2 . rand() . '.' . $photo->getClientOriginalExtension();
            $photo2->move('data/images/user/validation', $filename2);

            $user_shop->update([
                'identity_photo' => $filename1,
                'identity_selfie_photo' => $filename2,
            ]);
        }
        return redirect()->back()->with(['success' => 'Data Berhasil Diupdate']);
    }
}
