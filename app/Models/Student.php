<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

     protected $fillable = [
        'nim',
        'name',
        'cohort_year',
        'study_program_id',
    ];

    public function studentAccount(): HasOne
    {
        return $this->hasOne(StudentAccount::class,"student_id","id");
    }

     public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function trainingParticipants(): HasMany
    {
        return $this->hasMany(TrainingParticipant::class);
    }
}
