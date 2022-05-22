<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = ['jenis_barang','nama_barang', 'ukuran', 'warna', 'harga', 'stok'];
}