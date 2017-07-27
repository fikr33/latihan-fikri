<?php

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


Route::get('/about', function () {
    return '<h1>Halo</h1>'
    .'Selamat Datang Di Web App Saya<br>'
    .'Laravel, emang keren.';
});

Route::get('/bb', function () {
    return view('about');
});

Route::get('/bb/1', function () {
    return view('about.satu');
});

Route::get('/bb/2', function () {
    return view('about.dua');
});

Route::get('/bb/3', function () {
    return view('about.tiga');
});

Route::get('/bb/{hh}/{yy}/{tt}', function ($a,$b,$c) {
    return '<br><h1>nama :'.$a.'<br><h1>sekolah :'.$b.'<br><h1>umur :'.$c;
});

Route::get('/nama/{john}', function ($r=john) {
    return 'about'.$r='john';
});