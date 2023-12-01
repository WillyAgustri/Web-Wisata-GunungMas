<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id_kontak';
    protected $table = 'tb_kontak';
    protected $fillable = [
        'Nama_Kontak',
        'Email',
        'No_telp',
        'Ket',
    ];

    public $timestamps = false;
}