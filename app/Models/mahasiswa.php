<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Has;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    // use HasFactory;

    protected $table = 'mahasiswa';

    public $timestamps = false;

    protected $fillable = ['nim','nama_mahasiswa','umur'];
}