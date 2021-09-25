<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wsb', function () {
    return view('wsb');
});

Route::get('/wsb2', function () {
    return ['name' => 'wsb', 'surname' => 'Kowalski'];
});

Route::get('/wsb3', function () {
    return view('wsb', ['name' => 'wsb', 'surname' => 'Kowalski', 'city' => 'Poznań']);
});

Route::get('/pages/{x}', function ($x) {
    $pages = [
        'about' => 'Strona WSB',
        'contact' => 'dupa@op.pl',
        'home' => 'Strona Domowa'
    ];
    return $pages[$x];
});

Route::get('/address/{city?}/{street?}/{zip_code?}', function (String $city='-', String $street='-', int $zip_code=null) {
    $zip_code = substr($zip_code, 0, 2). '-'. substr($zip_code, 2, 3);
    echo <<< ADDRESS
    Miasto: $city <br>
    Ulica: $street <br>
    Kod Pocztowy: $zip_code
    <hr>
    ADDRESS;
})->name('address'); //kwarg? - nieobowiązkowy element

Route::redirect('/adres/{city?}/{street?}/{zip_close?}', '/address/{city?}/{street?}/{zip_close?}');

Route::prefix('admin')->group(function(){
    Route::get('/home/{name}', function (String $name) {
        echo "Witaj $name na stronie administracyjnej";
    })->where(['name' => '[A-Za-z]+']);

    Route::get('/users', function () {
        echo "Uzytkownicy strony";
    });
});

Route::redirect('/admin/{name}', '/admin/home/{name}');
