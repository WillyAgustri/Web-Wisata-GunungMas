<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;


    protected $fillable = [
        'Id_galeri',
        'Id_wisata',
        'Nama_galeri',
        
    ];
}
