@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .checked {
            color: orange;
        }

        .img-product {
            max-width: 300px;
            max-height: 200px;
            border-radius: 16px;
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

    </style>

    <div class="container mt-5">
        <h1 class="text-center">Service</h1>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($services as $s)
                    <div class="col-4">
                        <a href="{{ route('detail-service', ['id' => $s->id]) }}">
                            <div class="card card-product shadow-sm">
                                <div class="card-body">
                                    <img src="https://a.cdn-hotels.com/gdcs/production143/d1112/c4fedab1-4041-4db5-9245-97439472cf2c.jpg"
                                        class="img-product">
                                    <p class="card-text mt-3">
                                        {{ $s->service }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
