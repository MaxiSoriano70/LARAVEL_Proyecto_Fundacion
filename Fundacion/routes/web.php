<?php

use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;
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
php artisan make:controller NameController --resource
php artisan route:list
*/

Route::get('/', function () {
    return view("welcome");
});

Route::resource('/Institucion', InstitucionController::class);
Route::resource('/Personal', PersonalController::class);
Route::post('/Login/diferenciar', [LoginController::class,'diferenciar'])->name("Login.diferenciar");
/*Route::resource('Login', 'LoginController');*/
Route::resource('/Login',LoginController::class);
