<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return view('Home.AdminHome');
});

Route::get('/home', function () {
    return view('Home.AdminHome');
});


Auth::routes();



//Add Items
Route::get('/addItem',[ItemController::class, 'create']);
Route::post('/storeItem',[ItemController::class,'store']);
/*Route::get('/addItem', function () {
    return view('Home.AdminHome');
});*/

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
