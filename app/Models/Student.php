<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'classroom_id',
        'birthplace',
        'birthdate',
        'gender',
        'status',
        'child_no',
        'siblings',
        'kk',
        'kk_photo',
        'nisn',
        'nis',
        'address',
        'address_no',
        'address_rt',
        'address_rw',
        'kelurahan',
        'kecamatan',
        'city',
        'pos_code',
        'from_school',
        'from_school_address',
        'from_school_level',
        'uniform_size',
        'phone_number',
        'photo',
        'kip_photo',
        'father_name',
        'father_nik',
        'father_birthplace',
        'father_birthdate',
        'father_education',
        'father_job',
        'father_income',
        'father_ktp',
        'mother_name',
        'mother_nik',
        'mother_birthplace',
        'mother_birthdate',
        'mother_education',
        'mother_job',
        'mother_income',
        'mother_ktp',
        'wali_name',
        'wali_nik',
        'wali_birthplace',
        'wali_birthdate',
        'wali_education',
        'wali_job',
        'wali_income',
        'wali_ktp',
        'wali_phone',
        
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
