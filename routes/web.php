<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siempuController;

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

Route::get('/', 'App\Http\Controllers\siempuController@index');
Route::get('/profil', 'App\Http\Controllers\siempuController@profil');
Route::get('/regulasi', 'App\Http\Controllers\siempuController@regulasi');
Route::get('/dg', 'App\Http\Controllers\siempuController@dg');
Route::get('/login', 'App\Http\Controllers\siempuController@login');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['user'])->group(function () {
        Route::get('/form', 'App\Http\Controllers\siempuController@form');
        Route::post('/addempu', 'App\Http\Controllers\siempuController@addempu');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\siempuController@dashboard');
        Route::get('/cin', 'App\Http\Controllers\siempuController@cin');
        Route::get('/user', 'App\Http\Controllers\siempuController@user');
        Route::get('/empu', 'App\Http\Controllers\siempuController@empu');
        Route::get('/kritiksaran', 'App\Http\Controllers\siempuController@kritiksaran');

        //Delete
        Route::get('/delete-kritiksaran/{id}', 'App\Http\Controllers\siempuController@deleteKritiksaran');
        Route::get('/delete-cin/{id}', 'App\Http\Controllers\siempuController@deleteCin');
        Route::get('/delete-empu/{id}', 'App\Http\Controllers\siempuController@deleteEmpu');
        Route::get('/delete-admin/{id}', 'App\Http\Controllers\siempuController@deleteAdmin');

        //Add
        Route::post('/add-kritiksaran', 'App\Http\Controllers\siempuController@addKritiksaran');
        Route::post('/add-cin', 'App\Http\Controllers\siempuController@addCin');
        Route::post('/add-ekspedisi', 'App\Http\Controllers\siempuController@addEkspedisi');
        Route::post('/add-empu', 'App\Http\Controllers\siempuController@addempuadmin');

        //Update
        Route::post('/update-cin', 'App\Http\Controllers\siempuController@updateCin');
        Route::post('/update-empu', 'App\Http\Controllers\siempuController@updateEMPU');
        Route::post('/update-admin', 'App\Http\Controllers\siempuController@updateAdmin');
        Route::post('/update-kritiksaran', 'App\Http\Controllers\siempuController@updatekritiksaran');

        //Detail
        Route::post('/detail-cin', 'App\Http\Controllers\siempuController@detailCin');
    });
});

//Login
Route::POST('/login', 'App\Http\Controllers\siempuController@loginPost');
Route::get('/login', 'App\Http\Controllers\siempuController@login')->name('login')->middleware('guest');

//Logout
Route::get('/logout', 'App\Http\Controllers\siempuController@logout');
