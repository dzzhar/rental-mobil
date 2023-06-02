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
        'merk_id',
        'tanggal_peminjaman',
        'tanggal pengembalian',
        'lama_peminjaman',
        'status_mobil'
    ];
}
