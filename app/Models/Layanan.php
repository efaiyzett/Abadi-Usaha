<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    
    use HasFactory;
    protected $table = 'jenis_layanan';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis'];

    public function pesanan(){
        return $this->hasMany(Pesanan::class);
    }

}
