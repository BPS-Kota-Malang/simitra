<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeDokumen extends Model
{
    use HasFactory;

    protected $table = 'tipe_dokumen';
    protected $fillable = ['name'];

    public function guestKelengkapan() {
        return $this->hasMany(Kelengkapan::class, 'id_kelengkapan');
    }
}
