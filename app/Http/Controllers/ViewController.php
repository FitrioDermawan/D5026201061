<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }

    function periksaCovid() {
        //source untuk data / proses bisnis yg di olah
        return view('periksacovid') ;
    }

    function hasilPeriksa(Request $request) {
        //source untuk data / proses bisnis yg di olah
        return view('hasil') ;
    }

}
