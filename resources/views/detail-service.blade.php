@extends('layouts.app')
@section('content')

    <style>
        .area {
            width: 200px;
            border: 1px solid #0FAE4E;
            background: white;
        }

        .lebar {
            width: 200px;
            color: white;
            border: 1px solid #0FAE4E;
            background: #0FAE4E;
        }

        .checked {
            color: orange;
        }

        .img-product {
            width: 100%;
            max-height: 448px;
            border-radius: 24px;
        }

        .card-product {
            border-radius: 16px;
        }

        .card-text {
            text-decoration: none;
            color: black;
        }

        .card-text:hover {
            text-decoration: none;
        }

        .card-order {
            border: 1px solid #0FAE4E;
            border-radius: 16px;
        }

        .rounded-16 {
            border-radius: 16px;
        }

        .btn-outline-primary {
            border: 1px solid #0FAE4E;
            color: #0FAE4E;
        }

        .btn-outline-primary:hover {
            border: 1px solid #0FAE4E;
            background: #0FAE4E;
        }

        .text-20 {
            font-size: 20px;
        }

        .text-14 {
            font-size: 14px;
        }

        .font-weight-semi {
            font-weight: 500;
        }

    </style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9">
                <img src="https://a.cdn-hotels.com/gdcs/production143/d1112/c4fedab1-4041-4db5-9245-97439472cf2c.jpg"
                    class="img-product">
                <h4 class="mt-3">{{ $service->service }}</h4>
                <div class="d-flex mt-2">
                    <i data-feather="map-pin" class="text-feather"></i>
                    <a href="{{ $service->maps_link }}"
                        class="text-green pointer font-weight-semi ml-2">{{ $service->location }}</a>
                </div>
                <div class="mt-5">
                    <div class="d-flex">
                        <i data-feather="phone" class="text-feather mr-3"></i>
                        <p>{{ $user->telp }}</p>
                    </div>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-order p-4">
                    <p class="text-14 text-secondary mb-0">Harga</p>
                    <p class="text-20 text-green mb-3 font-weight-semi">Rp. {{ $service->price }}</p>
                    <p class="text-14 text-secondary mb-0">Lokasi</p>
                    <p class="text-20 text-green mb-3 font-weight-semi">{{ $service->service_area }}</p>
                    <button class="btn btn-primary rounded-16 btn-block" data-toggle="modal"
                        data-target="#exampleModal">Order</button>
                    <button class="btn btn-outline-primary rounded-16 btn-block">Share</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formOrder" action="{{ route('create-order') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="address" value="" placeholder="Address"
                                        required>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Service Date</label>
                                    <input type="date" class="form-control" name="service_date" value="" required>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Maps Link</label>
                                    <input type="text" class="form-control" name="maps" value="" placeholder="Maps Link"
                                        required>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Payment Method</label>
                                    <select class="form-control" name="payment_method">
                                        {{-- <option value="">Pilih Metode Pembayaran</option> --}}
                                        <option value="0" selected>Cash</option>
                                        {{-- <option value="1">Bank Transfer</option> --}}
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="provider_id" value="{{ $service->id }}">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="$('#formOrder').submit()">Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
