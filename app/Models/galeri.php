<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id_galeri';
    protected $table = 'tb_galeri';

    protected $fillable = [
        'Id_wisata',
        'Nama_galeri',
        'Foto',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'Id_wisata');
    }

    public $timestamps = false;
}