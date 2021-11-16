@extends('layouts.app')
@section('content')

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
   <div class="row">
    <div class="col-sm-8" style="background-color:yellow;">
        <svg class="bd-placeholder-img card-img-top" style="border-radius: 4%" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
    </div>
    <div class="col-sm-4" style="background-color:pink;">
       <div class="text-black mt-4" style="font-size: 15px">Harga</div>
                <input class="mt-2" style="border: 1px solid #0FAE4E" type="text" id="lname" value="Rp. 0" name="lname" disabled><br><br>
                <input type="text" style="border: 1px solid #0FAE4E" id="lname" name="lname" value="Rp. 200.000" disabled><br><br>
                <input class="lebar" type="submit" value="Terapkan">
    </div>
  </div>
</div>



@endsection
