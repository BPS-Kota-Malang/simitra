<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $table = "kegiatan";
    protected $fillable = [
        'id_products',
        'jenis',
        'tanggal',
        'gaji',
    ];

    public function Product(){
        return $this->belongsTo(Product::class, 'id_products');
    }
}
