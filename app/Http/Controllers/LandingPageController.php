<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Provider;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $services = Provider::where('status', '=', 1)->paginate(6);
        return view('landing-page', compact(['services']));
    }

    public function service()
    {
        $services = Provider::where('status', '=', 1)->get();
        return view('service', compact(['services']));
    }

    public function detailService($id)
    {
        $service = Provider::where([['status', '=', 1], ['id', '=', $id]])->first();
        $user = UserProfile::where('id', '=', $service->user_id)->first();
        return view('detail-service', compact(['service', 'user']));
    }

    public function createOrder(Request $request)
    {
        $shop = Provider::where('id', '=', $request->provider_id)->first();
        $invoice = Auth::user()->id . $request->id . rand();
        Order::create([
            'provider_id' => $shop->id,
            'user_id' => Auth::user()->id,
            'invoice' => $invoice,
            'total_price' => $shop->price,
            'service_date' => $request->service_date,
            'location' => $request->address,
            'maps_location' => $request->maps,
            'payment_method' => $request->payment_method,
            'payment_status' => 0,
            'status' => 0,
        ]);

        return redirect()->back()->with(['success' => 'Data Berhasil Diupdate']);
    }
}
