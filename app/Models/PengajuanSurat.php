<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_surat';
    protected $fillable = [
        'nik',
        'nama',
        'no_tlp',
        'alamat',
        'ajukan_surat'
    ];
}
