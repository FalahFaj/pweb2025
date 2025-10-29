<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = [
        'building_id',
        'room_code',
        'capacity',
        'room_type',
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }
}
