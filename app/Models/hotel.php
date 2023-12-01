<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $table = 'tb_hotel';
    protected $primaryKey = 'Id_hotel';

    protected $fillable = [
      'Nama_hotel',
      'gambar',
      'Latitude',
      'Longitude',
    ];

    public $timestamps = false;
}