<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsbSite extends Controller
{
    function index($site){
        // print("WsbController");
        return ['site' => $site, 'city' => 'Poznan'];
    }
}
