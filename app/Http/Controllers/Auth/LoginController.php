<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';
    // protected function redirectTo()
    // {
    //     if (auth()->user()->role == 1) {
    //         return '/dashboard/member';
    //     } else if (auth()->user()->role == 2) {
    //         return '/dashboard/dojo';
    //     } else if (auth()->user()->role == 3) {
    //         return '/dashboard/admin';
    //     } else if (auth()->user()->role == 4) {
    //         return '/dashboard/super-admin';
    //     }
    //     return '/';
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
