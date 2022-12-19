<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumdes extends Model
{
    use HasFactory;
    protected $table = 'bumdes';
    protected $fillabel = [
        'nik',
        'nama',
        'rt',
        'rw',
        'alamat',
        'produk',
        'penghasilan',
        'tanggal_input'
    ];
}
