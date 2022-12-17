<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "kecamatan";
    protected $fillable = ['kecamatan_tipe'];

    public function guestSubKecamatan() {
        return $this->hasMany(SubKecamatan::class, 'id_sub_kecamatan');
    }
    
}
