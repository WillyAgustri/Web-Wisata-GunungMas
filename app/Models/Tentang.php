<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id_tentang';
    protected $table = 'tb_tentang';
    protected $fillable = [
        'Des_Tentang',
    ];
    public $timestamps = false;
}