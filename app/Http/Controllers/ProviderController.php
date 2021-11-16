<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Provider;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    //
    public function index()
    {
        // dd('tes');
        $user_profile = UserProfile::where('user_id', '=', Auth::user()->id)->first();
        $shop = Provider::where('user_id', '=', Auth::user()->id)->first();
        $countOrder = Order::where([
            ['provider_id', '=', Auth::user()->id],
            ['status', '=', 0]
        ])->count();
        $countPayment = Order::where([
            ['provider_id', '=', Auth::user()->id],
            ['status', '=', 1],
            ['payment_method', '=', 1],
            ['payment_status', '=', 0]
        ])->count();
        $countProcess = Order::where([
            ['provider_id', '=', Auth::user()->id],
            ['status', '=', 1],
            ['payment_status', '=', 1]
        ])->count();
        $countProcess2 = Order::where([
            ['provider_id', '=', Auth::user()->id],
            ['status', '=', 1],
            ['payment_method', '=', 0],
            ['payment_status', '=', 0]
        ])->count();
        $countProcess = $countProcess + $countProcess2;
        $countComplete = Order::where([
            ['provider_id', '=', Auth::user()->id],
            ['status', '=', 2]
        ])->count();
        $order = Order::where('provider_id', '=', Auth::user()->id)->get();
        foreach ($order as $o) {
            $user = UserProfile::where('user_id', '=', $o->user_id)->first();
            $o->user = $user;
        }

        return view('shop.profile', compact([
            'shop',
            'user_profile',
            'countOrder',
            'countPayment',
            'countProcess',
            'countComplete',
            'order'
        ]));
    }

    public function updateProfile(Request $request)
    {
        $shop = Provider::where('user_id', '=', Auth::user()->id)->first();
        $shop->update([
            'name' => $request->name,
            'category' => $request->category,
            'service' => $request->service,
            'description' => $request->desc,
            'location' => $request->address,
            'maps_link' => $request->maps_link,
            'service_area' => $request->service_area,
            'price' => $request->price,
        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Diupdate']);
    }

    public function updateStatus(Request $request)
    {
        $shop = Provider::where('user_id', '=', Auth::user()->id)->first();
        if ($request->publish == 'on') {
            $shop->update([
                'status' => 1
            ]);
        } else {
            $shop->update([
                'status' => 0
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
