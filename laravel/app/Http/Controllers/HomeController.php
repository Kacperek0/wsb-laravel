<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Test;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = User::select('name', 'date')->get();

        // dd($data);

        return view('home', ['data' => $data]);
        // return view('adminlte.adminlte');
        // $name = Auth::user()->name;

        // $data = [
        //     $surname = 'Pawlak'
        // ];

        // $test = new Test();
        // $test->name = $name;
        // $test->surname = 'Nowak';
        // $test->save();

        // // dd(Test::get());

        // return Test::select(['name', 'surname'])->get();

        // $data = Test::select('*')
        // ->where('surname', 'Nowak')
        // ->get();
        // return view('test', ['data'=>$data]);
    }
}
