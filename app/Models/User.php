<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Classroom;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'classroom_id',
        'name',
        'email',
        'password',
        'role',
        'role_name',
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

}
