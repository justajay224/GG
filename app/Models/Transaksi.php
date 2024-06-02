<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi'; // Nama tabel

    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'destinasi_id',
        'nomor_telepon',
        'tanggal_keberangkatan',
        'jumlah_penumpang',
        'total_pembayaran',
        'metode_pembayaran',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }
}

