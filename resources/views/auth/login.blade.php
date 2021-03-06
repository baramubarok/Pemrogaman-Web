@php
$title = 'Login Page';
$description = 'Login Page';
@endphp
@extends('layouts.dashboard.layout-full',[
'title'=>$title,
'description'=>$description
])
@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/auth.login.js') }}"></script>
@endsection

@section('content_left')
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <div class="mb-5">
                    <h1 class="display-3 text-white">Search Your Service</h1>
                    <h1 class="display-3 text-white">Siap Melayani Kebutuhan Anda</h1>
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                    Melayani berbagai kebutuhan anda dibidang jasa. Pengguna dapat memesan
                    jasa yang tersediia dengan mudah dan cepat
                </p>

                {{-- <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="{{ url('/') }}">Learn More</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('content_right')
    <div
        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo/logo.svg') }}">
                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Selamat Datang,</h2>
                <h2 class="cta-1 text-primary">Mari Kita Mulai!</h2>
            </div>
            <div class="mb-5">

                <p class="h6">Gunakanlah akun yang sudah terdaftar.</p>
                <p class="h6">
                    Jika anda tidak mempunyai akun silakan,
                    .
                </p>
                <p class="h6">
                    <a href="{{ route('register') }}">register</a>
                </p>
            </div>
            <div>
                <form class="tooltip-end-bottom" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="email"></i>
                        <input class="form-control" placeholder="Email" name="email" />
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="lock-off"></i>
                        <input class="form-control pe-7" name="password" type="password" placeholder="Password" />
                        @if (Route::has('password.request'))
                            <a class="text-small position-absolute t-3 e-3"
                                href="{{ route('password.request') }}">Forgot?</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
