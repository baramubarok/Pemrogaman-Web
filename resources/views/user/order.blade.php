@php
$html_tag_data = [];
$title = 'Dashboard User';
@endphp
@extends('layouts.dashboard.layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
])

@section('css')
    <style>
        .img-profile {
            max-width: 120px;
            max-height: 120px;
            border-radius: 100%;
        }

    </style>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/dashboard.visual.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Inventory Start -->
                <h2 class="small-title">Order</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div
                                        class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="cart" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Order</div>
                                    <div class="text-small text-primary">1 SERVICE</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div
                                        class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="credit-card" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Payment</div>
                                    <div class="text-small text-primary">8 SERVICE</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div
                                        class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="menu-bookmark" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Process</div>
                                    <div class="text-small text-primary">0 SERVICE</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-scale-up cursor-pointer sh-19">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div
                                        class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-cs-icon="badge" class="text-white"></i>
                                    </div>
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Review</div>
                                    <div class="text-small text-primary">0 SERVICE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inventory End -->
            </div>
        </div>
    </div>
@endsection
