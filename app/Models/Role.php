<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = [
        'name',
        'guard_name'
    ];

    public function guestUser() {
        return $this->hasMany(User::class);
    }
}
