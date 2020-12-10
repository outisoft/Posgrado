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

/*     Recuperar Contraseña     */
Route::get('/recover', 'PasswordController@getRecover')->name('recover');
Route::post('/recover', 'PasswordController@postRecover')->name('recover');
Route::get('/reset', 'PasswordController@getReset')->name('reset');
Route::post('/reset', 'PasswordController@postReset')->name('reset');

/* Administrador de roles */
Route::resource('/role', 'RoleController')->names('role');

/* Administrador de usuarios */
Route::resource('/user', 'UserController', ['except'=>['create','store']])->names('user');

/*      Perfil de Usuario    */
Route::resource('/perfil', 'PerfilController')->names('perfil');

/*   Descarga   */
Route::get('/Latter/{id}', 'LatterController@show')->name('download');

/*    Register Check  */
Route::post('/register/check', 'Auth\RegisterController@check')->name('register.check');

/*    Documentos (denegados/aprobados)  */
Route::resource('/documento', 'LatterController')->names('documento');
Route::get('/denegados', 'LatterController@denegados')->name('denegados');



                 /* USUARIOS */
/* Investigador */
Route::resource('/investigador', 'Users\InvestigadorController')->names('investigador');
Route::get('/document', 'Users\InvestigadorController@documents')->name('documents');
Route::get('/progreso', 'Users\InvestigadorController@progreso')->name('investigador.progreso');
Route::get('/historial', 'Users\InvestigadorController@historial')->name('historial');

/* Coordinador */
Route::resource('/coordinador', 'Users\CoordinadorController')->names('coordinador');

/* DEFOINVE */
Route::resource('/defoinve', 'Users\DefoinveController', ['except'=>['create','store']])->names('defoinve');
Route::get('/aprobados', 'Users\DefoinveController@aprobados')->name('aprobados');
Route::get('defoinve/{defoinve}/denegar', 'Users\DefoinveController@denegar')->name('denegar');

/* Direccion de Investigacion*/
Route::resource('/di', 'Users\DiController', ['except'=>['create','store']])->names('di');

/* Direccion General de Investigacion y Posgrado*/
Route::resource('/dgip', 'Users\DgipController', ['except'=>['create','store']])->names('dgip');
