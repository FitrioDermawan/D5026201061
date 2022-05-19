<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EatController extends Controller
{
    //
    public function index() {
        return view('eatwell.home') ;
    }

    public function reg() {
        return view('eatwell.buatakun') ;
    }

    public function login() {
        return view('eatwell.masuk') ;
    }

    public function dash() {
        return view('eatwell.dashboard') ;
    }

    public function kalku() {
        return view('eatwell.kalkulasi') ;
    }

    public function prof() {
        return view('eatwell.profil') ;
    }
}
