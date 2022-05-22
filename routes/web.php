<?php
use App\Http\Controllers\MahasiswaControler;
use App\Http\Controllers\ProfileC;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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
Route::get('data-mahasiswa', [MahasiswaControler::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaControler::class, 'create'])->name('create.dosen');
Route::post('save-mahasiswa', [MahasiswaControler::class, 'store'])->name('save.mahasiswa');
Route::delete('delete-mahasiswa/{id}', [MahasiswaControler::class, 'destroy'])->name('delete.mahasiswa');

//route untuk blog
Route::get('data-blog', [BlogController::class, 'index']);
Route::get('add-blog', [BlogController::class, 'create']);
Route::post('save-blog', [BlogController::class, 'store']);
Route::delete('delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete.blog');


//edit data
Route::get('edit-mahasiswa/{mahasiswa}',[MahasiswaControler::class, 'edit'])->name('edit.mahasiswa');

//proses update
Route::patch('update-mahasiswa/{mahasiswa}',[MahasiswaControler::class,'update'])->name('update.mahasiswa');





route::group(['middleware=>auth'], function (){
//Route untuk toko
Route::get('data-toko', [TokoController::class, 'index'])->middleware('auth');
Route::get('add-toko', [TokoController::class, 'create'])->middleware('auth'); 
Route::post('simpan-toko', [TokoController::class, 'store']);
Route::delete('delete-toko/{id}', [TokoController::class, 'destroy'])->name('delete.toko');
Route::get('edit-toko/{id}', [TokoController::class, 'edit'])->name('edit.toko');
Route::patch('update-toko/{toko}', [TokoController::class, 'update'])->name('update.toko');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');