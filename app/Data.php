<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'daftar';
    protected $fillable = ['nama', 'durasi', 'rating','gambar','link'];
}
