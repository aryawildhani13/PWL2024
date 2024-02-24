<?php

// use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2141762093 - Arya Widlhani Putra';
});

// Route::get('/helloc',[WelcomeController::class,'hello']);

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{art}', function
($artId) {
return 'Halaman Artikel dengan ID : '.$artId;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama Saya '.$name;
// });

Route::get('/user/{name?}', function ($name="Budi") {
    return 'Nama Saya '.$name;
});









route :: get('/mahasiswa', function(){
    $arrMahasiswa = ["Arya Wildhani Putra","Rayhan Gibran",
                    "Ahmad Ridla", "Ahmad Maulana", "Farhan Asyam"];

return view ('politeknik.mahasiswa',['mahasiswa'=> $arrMahasiswa]);

});

route :: get('/dosen', function(){
    $arrDosen = ["Pak ini","Pak Itu",
                    "Pak ane", "Bu anu", "Bu ahu"];

return view ('politeknik.dosen',['dosen'=> $arrDosen]);

});


