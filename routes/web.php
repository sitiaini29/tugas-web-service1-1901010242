<?php
use App\Http\Controllers\MahasiswaC;
use App\Http\Controllers\ProfileC;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog.index');
})->name('utama');

Route::get('/about', function(){
    return view('about');
})->name('tentang-saya');

Route::get('/profile',[ProfileC::class,'index']);

Route::get('/nama', function(){
    return 'Aini';
});

Route::get('/dari-view', function(){
    return view('home');
});

Route::view('master', 'template/master');

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaC::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaC::class, 'create']);

Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', [BlogController::class, 'create']);


