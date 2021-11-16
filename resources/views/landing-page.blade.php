@extends('layouts.app')

@section('content')
    <style>
        .lingkaran {
            width: 100px;
            height: 100px;
            background: #FCF088;
            border-radius: 100%;
        }

        .lingkaran1 {
            width: 100px;
            height: 100px;
            margin-left: 550pt;
            margin-top: -5%;
            background: #FCF088;
            border-radius: 100%;
        }

        .box-judul {
            width: 400px;
            height: 100px;
            margin-top: -40pt;
            margin-left: 30pt;
            /* background: greenyellow; */
        }

        .box-info {
            width: 400px;
            height: 100px;
            margin-top: 20pt;
            margin-left: 30pt;
            /* background: greenyellow; */
        }

        .box-img {
            width: 280px;
            height: 350px;
            margin-top: -250pt;
            margin-left: 600pt;
            border-radius: 2%;
            /* background: blue; */
        }

        .banner {
            width: 280px;
            height: 350px;
            border-radius: 2%;

        }

        .btn-success {
            margin-left: 30px;
            margin-top: 5%;
        }

        .kotak {
            width: 100px;
            height: 100px;
            margin-left: 550pt;
            margin-top: -30%;
            background: #0FAE4E;
            border-radius: 2%;
        }

        .tombol-grid-album {
            margin: 3% 0 5%;
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
        <div class="container mr-4">
            <div class="lingkaran"></div>
            <div class="box-judul ">
                <h1>Search Your Service</h1>
                <h1>Easy & Fast</h1>
            </div>
            <div class="box-info">
                <p>Kami menyediakan dan menjebatani
                    berbagai kebutuhan dibidang jasa.
                    Pengguna dapat memesan jasa yang
                    Tersediia dengan mudah dan cepat</p>
            </div>
            <button type="button" class="btn btn-success">Find service</button>

            <div class="box-img">
                <img class="banner" src="{{ asset('img/background/landing.jpg') }}">
            </div>

            <div class="lingkaran1"></div>
        </div>

        <div class="album py-5">
            <div class="container">
                <div class="row">
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
