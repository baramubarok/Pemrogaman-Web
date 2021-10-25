<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $data = 'data';
        return view('landing-page', compact(['data']));
    }
}
