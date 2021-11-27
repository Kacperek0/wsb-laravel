<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function account(Request $req){
        return $req->input();
    }
}
