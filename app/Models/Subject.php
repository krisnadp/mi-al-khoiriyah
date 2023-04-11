<?php

namespace App\Models;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'grade',
        'class',
        
    ];

    public function subjects()
    {
        return $this->hasMany(Classroom::class);
    }
}
