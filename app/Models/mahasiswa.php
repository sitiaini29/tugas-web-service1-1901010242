<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Has
use Illuminate\Database\Eloquent\Model;


class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    public $timestamps = false

    protected $fillable = ['nim','nama_mahasiswa','umur'];
}