<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;

    protected $table = 'tb_wisata';

    protected $primaryKey = 'Id_wisata';

    protected $fillable = [
        'Nama_wisata',
        'Des_wisata',
        'Latitude',
        'Longitude',
    ];
}