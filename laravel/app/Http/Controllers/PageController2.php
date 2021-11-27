<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController2 extends Controller
{
    public function show($input){
        $list = [
            'fdd' => 'Dyskietka',
            'hdd' => 'Dysk Twardy',
            'ssd' => 'Dysk SSD'
        ];

        return $list[$input];
    }
}
