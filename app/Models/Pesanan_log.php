<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan_log extends Model
{
    use HasFactory;
    protected $table = "pesanan_log";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'keterangan', 'jenis'];
}
