<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'jenis', 'harga'];
    protected $dates = ['created_at', 'updated_at'];


    public function layanan(){
        return $this->belongsTo(Layanan::class, 'jenis');
    }
}
