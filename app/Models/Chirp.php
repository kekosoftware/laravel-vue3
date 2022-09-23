<?php

namespace App\Models;

use App\Models\User;
use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'create' => ChirpCreated::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
