<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSampah extends Model
{
    use HasFactory;

    protected $table = 'bank_sampah';
    protected $fillable = [
        'nik',
        'nama',
        'rt',
        'rw',
        'alamat',
        'berat_sampah',
        'harga_per_kg',
        'tanggal_setor',
        'total_harga'
    ];
}
