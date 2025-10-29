<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classes extends Model
{
    /** @use HasFactory<\Database\Factories\ClassesFactory> */
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'course_id',
        'class_name',
        'semester',
        'academic_year',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
