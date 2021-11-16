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
    <link rel="stylesheet" href="{{ asset('/css/vendor/datatables.min.css') }}" />
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/mousetrap.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/dashboard.visual.js') }}"></script>
    <script src="{{ asset('/js/forms/layouts.js') }}"></script>
    <script src="{{ asset('/js/cs/datatable.extend.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatable.boxedvariations.js') }}"></script>
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
                                    <div class="text-small text-primary">{{ $countOrder }} SERVICE</div>
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
                                    <div class="text-small text-primary">{{ $countPayment }} SERVICE</div>
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
                                    <div class="text-small text-primary">{{ $countProcess }} SERVICE</div>
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
                                    <div class="heading text-center mb-0 d-flex align-items-center lh-1">Complete</div>
                                    <div class="text-small text-primary">{{ $countComplete }} SERVICE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inventory End -->
                <!-- Categories Start -->
                <div class="d-flex justify-content-between mb-4">
                    <h2 class="small-title align-self-center">Shop</h2>
                    <div class="d-flex">
                        <form id="publish-form" action="{{ route('shop-update-status') }}" method="post"
                            class="me-3 align-self-center">
                            @csrf
                            <div class="form-check form-switch">
                                @if ($shop->status == 1)
                                    <input class="form-check-input" type="checkbox" id="publishTrue" name="publish" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" id="publishFalse" name="publish">
                                @endif
                                <label class="form-check-label">Publish</label>
                            </div>
                        </form>
                        <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalEditProfile">
                            Edit Shop
                        </button>
                        <div class="modal modal-right fade scroll-out-negative" id="modalEditProfile" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable full">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Shop Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="scroll-track-visible">
                                            <form id="form-edit-profile" action="{{ route('shop-update-profile') }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <p class="">Shop</p>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="home"></i>
                                                    <input class="form-control" name="name" placeholder="Shop Name"
                                                        value="{{ $shop->name }}" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="gear"></i>
                                                    <input class="form-control" name="service" placeholder="Service Name"
                                                        value="{{ $shop->service }}" />
                                                </div>
                                                <div class="mb-3 filled w-100">
                                                    <i data-cs-icon="content"></i>
                                                    {{-- <input class="form-control" name="category"
                                                        placeholder="Service Category" value="{{ $shop->service }}" /> --}}
                                                    <select id="select2Filled" name="category"
                                                        data-placeholder="Service Category">
                                                        <option value="{{ $shop->category }}">{{ $shop->category }}
                                                        </option>
                                                        <option value="Electronics">Electornics</option>
                                                        <option value="IT">IT</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="coin"></i>
                                                    <input class="form-control" type="number" name="price"
                                                        placeholder="Service Price" value="{{ $shop->price }}" />
                                                </div>

                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="compass"></i>
                                                    <input class="form-control" type="text" name="service_area"
                                                        placeholder="Service Area" value="{{ $shop->service_area }}" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <i data-cs-icon="destination"></i>
                                                    <input class="form-control" type="text" name="maps_link"
                                                        placeholder="Shop Gmaps Link" value="{{ $shop->maps_link }}" />
                                                </div>
                                                <div class="mb-3 filled">
                                                    <textarea placeholder="Address" name="address" class="form-control"
                                                        rows="3">{{ $shop->location }}</textarea>
                                                    <i data-cs-icon="pin"></i>
                                                </div>
                                                <div class="mb-3 filled">
                                                    <textarea placeholder="Description" name="desc" class="form-control"
                                                        rows="3">{{ $shop->description }}</textarea>
                                                    <i data-cs-icon="news"></i>
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
                        <div class="row g-0 h-100">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 h-100 d-flex justify-content-center flex-column">
                                <img class="profile img-profile mx-auto" alt="profile"
                                    src="{{ asset('/img/profile/profile-9.jpg') }}" />
                            </div>
                            <div
                                class="col-12 col-sm-3 col-md-4 col-lg-5 h-100 d-flex ps-5 justify-content-between flex-column">
                                <p class="d-flex text-primary mb-1">Shop Name</p>
                                <a href="#" class="body-link d-flex mb-2">{{ $shop->name }}
                                </a>
                                <p class="d-flex text-primary mb-1">Service Name</p>
                                <a href="#" class="body-link d-flex mb-2">
                                    {{ $shop->service }} | {{ $shop->category }}
                                </a>
                                <p class="d-flex text-primary mb-1">Service Area</p>
                                <a href="#" class="body-link d-flex mb-2">{{ $shop->service_area }}</a>
                                <p class="d-flex text-primary mb-1">Price</p>
                                <a href="#" class="body-link d-flex mb-2">{{ $shop->price }}</a>
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
                            <div class="col-12 col-sm-3 col-md-4 col-lg-5">
                                <p class="d-flex text-primary mb-1">Address</p>
                                <a href="{{ $shop->maps_link }}"
                                    class="body-link d-flex mb-2">{{ $shop->location }}</a>
                                <p class="d-flex text-primary mb-1">Description</p>
                                <a href="#" class="body-link d-flex mb-2">{{ $shop->description }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Categories End -->

                <!-- Detail Order -->
                <!-- Pagination Start -->
                <section class="scroll-section" id="pagination">
                    <h2 class="small-title">Detail Order</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <!-- Pagination Controls Start -->
                            <div class="row">
                                <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                                    <div
                                        class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                        <input class="form-control form-control-sm datatable-search" placeholder="Search"
                                            data-datatable="#datatablePagination" />
                                        <span class="search-magnifier-icon">
                                            <i data-cs-icon="search"></i>
                                        </span>
                                        <span class="search-delete-icon d-none">
                                            <i data-cs-icon="close"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                                    <div class="d-inline-block">
                                        <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                            type="button" data-datatable="#datatablePagination">
                                            <i data-cs-icon="print"></i>
                                        </button>

                                        <div class="d-inline-block datatable-export" data-datatable="#datatablePagination">
                                            <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                                data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                                <i data-cs-icon="download"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <button class="dropdown-item export-copy" type="button">Copy
                                                </button>
                                                <button class="dropdown-item export-excel" type="button">Excel
                                                </button>
                                                <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                            </div>
                                        </div>
                                        <div class="dropdown-as-select d-inline-block datatable-length"
                                            data-datatable="#datatablePagination">
                                            <button class="btn btn-outline-muted btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-bs-offset="0,3">
                                                10 Items
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <a class="dropdown-item" href="#">5 Items</a>
                                                <a class="dropdown-item active" href="#">10 Items</a>
                                                <a class="dropdown-item" href="#">20 Items</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination Controls End -->

                            <!-- Pagination Table Start -->
                            <table class="data-table data-table-pagination data-table-standard responsive nowrap"
                                id="datatablePagination">
                                <thead>
                                    <tr>
                                        <th class="text-muted text-small text-uppercase">No</th>
                                        <th class="text-muted text-small text-uppercase">Name</th>
                                        <th class="text-muted text-small text-uppercase">Invoice</th>
                                        <th class="text-muted text-small text-uppercase">Price</th>
                                        <th class="text-muted text-small text-uppercase">Address</th>
                                        <th class="text-muted text-small text-uppercase">Payment</th>
                                        <th class="text-muted text-small text-uppercase">Status</th>
                                        <th class="text-muted text-small text-uppercase">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($order as $o)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $o->user->fullname }}</td>
                                            <td>{{ $o->invoice }}</td>
                                            <td>{{ $o->total_price }}</td>
                                            <td>
                                                <a href="{{ $o->maps_location }}">
                                                    {{ $o->location }}
                                                </a>
                                            </td>
                                            <td>
                                                @if ($o->payment_method == 0)
                                                    Offline
                                                @elseif ($o->payment_method == 1)
                                                    Online
                                                @endif
                                            </td>
                                            <td>
                                                @if ($o->status == 0)
                                                    <span class="badge bg-tertiary">
                                                        Confirmation
                                                    </span>
                                                @elseif ($o->status == 1 && $o->payment_method == 1 &&
                                                    $o->payment_status == 0)
                                                    <span class="badge bg-warning">
                                                        Unpaid
                                                    </span>
                                                @elseif ($o->status == 1 && $o->payment_method == 1 &&
                                                    $o->payment_status == 1)
                                                    <span class="badge bg-alternate">
                                                        Process
                                                    </span>
                                                @elseif ($o->status == 1 && $o->payment_method == 0 &&
                                                    $o->payment_status == 0)
                                                    <span class="badge bg-alternate">
                                                        Process
                                                    </span>
                                                @elseif ($o->status == 1 && $o->payment_method == 0 &&
                                                    $o->payment_status == 1)
                                                    <span class="badge bg-alternate">
                                                        Process
                                                    </span>
                                                @elseif ($o->status == 2)
                                                    <span class="badge bg-success">
                                                        Complete
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        Cancel
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($o->status == 0)
                                                    <form id="formConfirm" action="{{ route('shop-update-order') }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" class="hidden" name="id"
                                                            value="{{ $o->id }}">
                                                        <input id="statusConfirm" type="hidden" class="hidden"
                                                            name="status" value="">
                                                        <button
                                                            class="btn btn-icon btn-icon-only btn-outline-success btn-sm mb-1"
                                                            type="button" onclick="acceptConfirm()">
                                                            <i data-cs-icon="check"></i>
                                                        </button>
                                                        <button
                                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm mb-1"
                                                            type="button" onclick="cancelConfirm()">
                                                            <i data-cs-icon="close"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination Table End -->
                        </div>
                    </div>
                </section>
                <!-- Content End -->
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

        $('#publishTrue').on('change', function() {
            $('#publish-form').submit()
        });
        $('#publishFalse').on('change', function() {
            $('#publish-form').submit()
        });

        function acceptConfirm() {
            $('#statusConfirm').val(1)
            $('#formConfirm').submit()
        }

        function cancelConfirm() {
            $('#statusConfirm').val(-1)
            $('#formConfirm').submit()
        }
    </script>
@endsection
