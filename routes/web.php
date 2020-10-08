<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;

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

/* Administrador de roles */
Route::resource('/role', 'RoleController')->names('role');

/* Administrador de usuarios */
Route::resource('/user', 'UserController', ['except'=>[
    'create','store']])->names('user');


                 /* USUARIOS */
/* Investigador */
Route::resource('/investigador', 'Users\InvestigadorController')->names('investigador');
Route::get('/investigador', 'Users\InvestigadorController@documents')->name('investigador.documents');
//Route::get('/investigador', 'Users\InvestigadorController@progreso')->name('investigador.progreso');

/* Coordinador */
Route::resource('/coordinador', 'Users\CoordinadorController')->names('coordinador');

/* DEFOINVE */
Route::resource('/defoinve', 'Users\DefoinveController')->names('defoinve');
