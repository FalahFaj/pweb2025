<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Training extends Model
{
    /** @use HasFactory<\Database\Factories\TrainingFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'provider',
        'start_date',
        'end_date',
    ];

    public function trainingParticipants(): HasMany
    {
        return $this->hasMany(TrainingParticipant::class);
    }
}
