<?php

namespace App\Models;

use App\Models\Schedule;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'schedule_id',
        'code',
        'name',
        'grade',
        'class',
        
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
