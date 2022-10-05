<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKecamatan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "sub_kecamatan";
    protected $fillable = ['sub_kecamatan','id_kecamatan'];
    
    public function guestKecamatan() {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
