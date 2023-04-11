<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
    
}
