<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';
    protected $fillable = ['id_users','id_kegiatan', 'id_kecamatan', 'id_sub_kecamatan','gaji','status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function subkecamatan()
    {
        return $this->belongsTo(SubKecamatan::class, 'id_sub_kecamatan');
    }

}
