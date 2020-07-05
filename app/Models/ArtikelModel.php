<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul', 'isi', 'slug', 'tag'];
}
