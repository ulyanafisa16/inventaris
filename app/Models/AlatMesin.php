<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlatMesin extends Model
{
    protected $fillable = [
        'nomor_alat',
        'jenis_barang',
        'nama_barang',
        'merk_type',
        'jumlah',
        'satuan',
        'kondisi',
        'keterangan',
        'foto',
    ];
}
