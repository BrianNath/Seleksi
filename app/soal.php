<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $table = 'soals';
    protected $fillable = ['soal', 'opsi1', 'opsi2', 'opsi3', 'opsi4','kategori','image'];
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
