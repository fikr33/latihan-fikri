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

Route::get('/testmodel',function(){
    $e=App\Post::all();
    return $e;
});

Route::get('/testmodel1',function(){
    $e=App\Post::find(1);
    return $e;
});

Route::get('/testmodel2',function(){
    $e=App\Post::where('title','like','%Keluarga%')->get();
    return $e;
});

Route::get('/testmodel3',function(){
$post=App\Post::find(1);
$post->title="Ciri Keluarga";
$post->save();
return $post;
});

Route::get('/testmodel4',function(){
$post=App\Post::find(1);
$post->delete();
});

Route::get('/testmodel5',function(){
$post= new App\Post;
$post->title="Orang Ganteng & Orang Tampann :";
$post->content="Fikri Purqon Azis";
$post->save();
return $post;
});

Route::get('/cektampilan',function(){
    return view('layouts.master');
});

// Route::get('/orangtua',function(){
//     $ortu = App\orangtua::all();
//     foreach ($ortu as $key) {
//         echo $key->nama_ibu;
//         echo " dengan ";
//         echo $key->nama_ayah;
//         echo " mempunyai anak ";
//         foreach ($key->siswa as $data){
//             echo "<li>".$data->nama."</li>";
//             echo "<hr>";
//         }
//     }
// });

Route::get('/beda1', 'mycontroller@index');

Route::get('/beda2', 'mycontroller@tampilmodel');

Route::get('/beda3', 'mycontroller@tampilview');

Route::get('/beda4', 'mycontroller@percobaan');

Route::resource('orangtua','OrangtuaController');

Route::resource('siswa','SiswaController');

Route::resource('author','AuthorController');
Auth::routes();

Route::get('/home', 'HomeController@index');
