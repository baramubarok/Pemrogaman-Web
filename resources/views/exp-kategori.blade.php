@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .area{
        width: 200px;
        border: 1px solid #0FAE4E;
        background: white;
    }
    .lebar{
        width: 200px;
        color: white;
        border: 1px solid #0FAE4E;
        background: #0FAE4E;
    }

    .checked {
        color: orange;
    }
</style>

<div class="container mt-5">
    <h1 class="text-center">Pembuatan Website</h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4" style="background-color:white">
            <div class="text-green" style="font-size: 20px">Filters</div>
            <div class="text-black mt-4" style="font-size: 15px">Lokasi</div>
        <div class="dropdown">
            <button class="area" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Area
            <span class="caret"></span></button>
        </div>
            <div class="text-black mt-4" style="font-size: 15px">Harga</div>
                <input class="mt-2" style="border: 1px solid #0FAE4E" type="text" id="lname" value="Rp. 0" name="lname" disabled><br><br>
                <input type="text" style="border: 1px solid #0FAE4E" id="lname" name="lname" value="Rp. 200.000" disabled><br><br>
                <input class="lebar" type="submit" value="Terapkan">
            <div class="text mt-2">
                <p>Bintang</p>
                <span class="fa fa-star checked"> </span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"> &emsp;5.0</span>

            </div>
                <span class="fa fa-star checked"> </span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"> &emsp;4.0</span><br>

                <span class="fa fa-star checked"> </span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"> &emsp;3.0</span><br>

                <span class="fa fa-star checked"> </span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"> &emsp;2.0</span><br>

                <span class="fa fa-star checked"> </span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"> &emsp;1.0</span><br>
        </div>
        <div class="col-sm-4" style="background-color: white;">
            <div class="card shadow-sm">
                   <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                    <div class="card-body">
                        <p class="card-text">Jasa Pembuatan Website</p>
                        <p class="card-text">Rp.400.000</p>
                        <small class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</small>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <div class="card shadow-sm mt-5">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                    <div class="card-body">
                        <p class="card-text">Jasa Pembuatan Website</p>
                        <p class="card-text">Rp.400.000</p>
                        <small class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</small>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
        </div>

        <div class="col-sm-4" style="background-color: white;">
            <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                    <div class="card-body">
                        <p class="card-text">Jasa Pembuatan Website</p>
                        <p class="card-text">Rp.400.000</p>
                        <small class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</small>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <div class="card shadow-sm mt-5">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                    <div class="card-body">
                        <p class="card-text">Jasa Pembuatan Website</p>
                        <p class="card-text">Rp.400.000</p>
                        <small class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</small>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

        </div>


        </div>

    </div>


@endsection
