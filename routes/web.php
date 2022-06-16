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

Route::get('/login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});


Route::get('dashboard admin', function (){
    return view('dashboard/admin');
});

Route::get('dashboard dosen', function (){
    return view('dashboard/dosen');
});

Route::get('listdosen', function (){
    return view('dashboard/listdosen');
});

Route::get('portodosen', function (){
    return view('dashboard/portodosen');
});

Route::get('listposts', function (){
    return view('dashboard/listposts');
});

Route::get('formpost', function (){
    return view('dashboard/formpost');
});

Route::get('mydata', function (){
    return view('dashboard/mydata');
});

Route::get('formprofil', function (){
    return view('dashboard/formprofil');
});

Route::get('formporto', function (){
    return view('dashboard/formporto');
});

Route::get('membership', function (){
    return view('dashboard/membership');
});

Route::get('formmember', function (){
    return view('dashboard/formmember');
});

Route::get('portofolio', function (){
    return view('resume/index');
});


Route::get('listmember', function (){
    return view('/dashboard/listmember');
});


Route::get('bayar', function (){
    return view('/dashboard/bayar');
});


