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
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}" />
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/dashboard.visual.js') }}"></script>
    <script src="{{ asset('/js/forms/layouts.js') }}"></script>
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
                        <div class="col-6 col-sm-6 col-lg-3">
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
                        <div class="col-6 col-sm-6 col-lg-3">
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
                        <div class="col-6 col-sm-6 col-lg-3">
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
                        <div class="col-6 col-sm-6 col-lg-3">
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
                <!-- Categories Start -->
                <div class="d-flex justify-content-between mb-4">
                    <h2 class="small-title align-self-center">Profile</h2>
                    <div>
                        <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalEditProfile">
                            Edit Profile
                        </button>
                        <div class="modal modal-right fade scroll-out-negative" id="modalEditProfile" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable full">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="scroll-track-visible">
                                            <form id="form-edit-profile" action="{{ route('user-update-profile') }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <p class="">Profile</p>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="user"></i>
                                                    <input class="form-control" name="name" placeholder="Name"
                                                        value="{{ $user_profile->fullname }}" />
                                                </div>
                                                <div class="mb-3 filled w-100">
                                                    <i data-cs-icon="gender"></i>
                                                    <select id="select2Filled" name="gender" data-placeholder="Gender">
                                                        @if ($user_profile->gender == 'm')
                                                            <option label="&nbsp;"></option>
                                                            <option value="m" selected>Male</option>
                                                            <option value="f">Female</option>
                                                        @elseif ($user_profile->gender == 'f')
                                                            <option label="&nbsp;"></option>
                                                            <option value="m">Male</option>
                                                            <option value="f" selected>Female</option>
                                                        @else
                                                            <option label="&nbsp;"></option>
                                                            <option value="m">Male</option>
                                                            <option value="f">Female</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="phone"></i>
                                                    <input class="form-control" type="number" name="telp"
                                                        placeholder="Telp" value="{{ $user_profile->telp }}" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="file-image"></i>
                                                    <input id="user-control" class="form-control" readonly
                                                        onclick="openFile('user-photo','user-control')" type="text"
                                                        placeholder="Photo" value="{{ $user_profile->photo }}" />
                                                    <input id="user-photo" class="d-none" type="file"
                                                        accept="image/png, image/gif, image/jpeg" name="photo"
                                                        placeholder="Photo" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <textarea placeholder="Address" name="address" class="form-control"
                                                        rows="3" name="address">
                                                                                            {{ str_replace("\r\n\t/g", '', $user_profile->address) }}
                                                                                        </textarea>
                                                    <i data-cs-icon="pin"></i>
                                                </div>

                                                <hr class="my-5">

                                                <p class="">Identity Verification</p>
                                                <div class="mb-3 filled w-100">
                                                    <i data-cs-icon="news"></i>
                                                    <select id="selectBasic" name="identity_type"
                                                        data-placeholder="Identity Type">
                                                        @if ($shop->identity_type == 'KTP')
                                                            <option label="&nbsp;"></option>
                                                            <option value="KTP" selected>KTP</option>
                                                            <option value="Passport">Passport</option>
                                                        @elseif ($shop->identity_type == 'Passport')
                                                            <option label="&nbsp;"></option>
                                                            <option value="KTP">KTP</option>
                                                            <option value="Passport" selected>Passport</option>
                                                        @else
                                                            <option label="&nbsp;"></option>
                                                            <option value="KTP">KTP</option>
                                                            <option value="Passort">Passport</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="credit-card"></i>
                                                    <input class="form-control" type="text" name="identity"
                                                        placeholder="Identity Number"
                                                        value="{{ $shop->identity_number }}" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="file-data"></i>
                                                    <input id="identity-control" class="form-control" readonly
                                                        onclick="openFile('identity-photo','identity-control')" type="text"
                                                        placeholder="Identity Photo"
                                                        value="{{ $shop->identity_photo }}" />
                                                    <input id="identity-photo" class="d-none" type="file"
                                                        accept="image/png, image/gif, image/jpeg" name="identity_photo" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="file-image"></i>
                                                    <input id="identity-selfie-control" class="form-control" readonly
                                                        onclick="openFile('identity-selfie-photo','identity-selfie-control')"
                                                        type="text" placeholder="Selfie With Identity Photo"
                                                        value="{{ $shop->identity_selfie_photo }}" />
                                                    <input id="identity-selfie-photo" class="d-none" type="file"
                                                        accept="image/png, image/gif, image/jpeg"
                                                        name="identity_selfie_photo" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" onclick="$('#form-edit-profile').submit()"
                                            class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5 h-auto">
                    <div class="card-body h-100">
                        <div class="d-flex  mb-4">
                            @if (Auth::user()->verified == 0)
                                <div class="d-flex">
                                    <i data-cs-icon="close" class="me-2 text-danger"></i>
                                    <p class="text-danger mb-0">Not Verified </p>
                                    <p class="mb-0 ms-1"> | Upload <b class="text-primary">Identity Card</b> to Open
                                        Shop
                                    </p>
                                </div>
                            @else
                                <div class="d-flex">
                                    <i data-cs-icon="check" class="me-2 text-primary"></i>
                                    <p class="text-primary mb-0">Verified</p>
                                </div>
                            @endif

                        </div>
                        <div class="row g-0 h-100">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 h-100 d-flex justify-content-center flex-column">
                                <img class="profile img-profile mx-auto" alt="profile"
                                    src="{{ asset('/img/profile/profile-9.jpg') }}" />
                            </div>
                            <div
                                class="col-12 col-sm-6 col-md-8 col-lg-10 h-100 d-flex ps-5 justify-content-between flex-column">
                                <p class="d-flex text-primary mb-1">Name</p>
                                <a href="#" class="body-link d-flex mb-2">{{ $user_profile->fullname }} |
                                    {{ Auth::user()->name }}</a>
                                <p class="d-flex text-primary mb-1">Gender</p>
                                <a href="#" class="body-link d-flex mb-2">
                                    {{ $user_profile->gender == 'm' ? 'Male' : 'Female' }}
                                </a>
                                <p class="d-flex text-primary mb-1">Address</p>
                                <a href="#" class="body-link d-flex mb-2">{{ $user_profile->address }}</a>
                                <p class="d-flex text-primary mb-1">Contact</p>
                                @if ($user_profile->telp != null)
                                    <a href="#" class="body-link d-flex mb-2">
                                        <i data-cs-icon="phone" class="me-2"></i>
                                        <p class="d-flex mb-1">{{ $user_profile->telp }}</p>
                                    </a>
                                @endif
                                <a href="#" class="body-link d-flex mb-2">
                                    <i data-cs-icon="email" class="me-2"></i>
                                    <p class="d-flex mb-1">{{ Auth::user()->email }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Categories End -->
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        function openFile(id, input) {
            $('#' + id + '').click()
            $('#' + id + '').on('change', function() {
                const filename = $('#' + id + '').val().replace(/C:\\fakepath\\/i, '')
                $('#' + input + '').val(filename)
            });
        }
    </script>
@endsection
