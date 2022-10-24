<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelengkapan extends Model
{
    use HasFactory;

     protected $table = 'kelengkapan';

    protected $fillable = [
        'user_id',
        'tipe_id',
        'file',
    ];

    /**
     * Get the user that owns the Kelengkapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tipe()
    {
        return $this->belongsTo(TipeDokumen::class, 'tipe_id');
    }
}
