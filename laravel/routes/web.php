<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageController2;
use App\Http\Controllers\TestbookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\wsb_db;
use App\Http\Controllers\WsbController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WsbSite;
use Whoops\Run;

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

// dwie mozliwosci wywolania
Route::get('/site/{wsbsite}', [WsbSite::class, 'index']);

Route::get('/drives/{drive}', [PageController::class, 'show']);

Route::get('/userform', function(){
    return view('userform');
});

Route::post('UserController', [UserController::class, 'account']);

Route::get('/blade', function(){
    return view('subsite');
});

Route::get('WsbController', [WsbController::class, 'index']);

Route::get('wsb/{wsbsite}', [WsbController::class, 'index']);

Route::get('pc2/{input}', [PageController2::class, 'show']);

Route::get('/form', function(){
    return view('form');
});

Route::post('FormController', [FormController::class, 'account']);

Route::get('db', [wsb_db::class, 'index']);

Route::get('db/users', [wsb_db::class, 'users']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/book', [TestbookController::class, 'index']);
