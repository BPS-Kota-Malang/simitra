<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $fillable = ['nilai_ketepatan','nilai_kualitas','nilai_sikap','status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
