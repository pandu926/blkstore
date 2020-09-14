<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $fillable = ['slug', 'nama'];
    public function daftar () {
        return $this->belongsToMany(Daftar::class);
    }
}
 