<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $table = 'tb_pesan';

    protected $primaryKey = 'Id_pesan';

    protected $fillable = [
        'Id_pesan',
        'Email',
        'Nama',
        'Ket',
    ];
}