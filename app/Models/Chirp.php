<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    /**
     * Attributes that are mass-assignable
     */
    protected $fillable = [
        'message',
    ];

    /**
     * A Chirp belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
