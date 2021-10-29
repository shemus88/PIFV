<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('carrera/{id}',function($id) {
    return Carrera::find($id)->users;
});

Route::get('users/{id}',function($id){
    return user::find($id)->carrera;
});

Route::get('dameusuario', function(){
    $usuarioseleccionado= User::find(3);
    return $usuarioseleccionado;
});

Route::resource('users',UserController::class);

