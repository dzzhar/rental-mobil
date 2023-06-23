<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjamans";

    protected $fillable = [
        'user_id',
        'mobil_id',
        'nama_peminjaman',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status_mobil'
    ];
}
