<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account(Request $req){
        // return $req->input();
        // return $req->path();
        // return $req->url();
        // return $req->method();
        // return $req->path();
        // return $req->input('email');

       $req->validate([
            'email' => 'required | email',
            'password' => 'required | min:5 | max:8'
       ],
       [
           'email.required' => 'Fill in the field with email.'
       ]
    );
       return $req->input();
    }
}
