<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsbController extends Controller
{
    public function index($wsbsite){
        // print("WSB Controller");
        return [
            'site' => $wsbsite,
            'city' => 'Poznan'
        ];
    }
}
