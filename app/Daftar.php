<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';
    protected $fillable = ['nama', 'durasi', 'rating','gambar','link'];

    public function tags () {
        return $this->belongsToMany('App\Tags');
    }

}
