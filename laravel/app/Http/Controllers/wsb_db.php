<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class wsb_db extends Controller
{
    public function index(){
        return DB::select('select * from users;');
    }

    public function users(){
        // $users = DB::table('users')
        // // ->where('surname', 'Nowak')
        // ->get();

        // $count = DB::table('users')->count();
        // return $count;

        // $data = DB::table('users')->first();
        // print_r($data);
        // echo "<br> Imię: $data->name";

        // foreach ($users as $value) {
        //     print("$value->name<br>");
        // }

        // DB::table('users')
        // ->insert(
        //     [
        //         'name' => 'Kacper',
        //         'surname' => 'Testowy',
        //         'birthday' => '2000-02-02'
        //     ]
        //     );

        // $data = DB::table('users')
        // ->where('surname', 'Nowak')
        // ->update(
        //     [
        //         'name' => 'New'
        //     ]
        // );

        // echo $data;

        // $data = DB::table('miasta')
        // ->select('miasta.woj_id', '')};

}
