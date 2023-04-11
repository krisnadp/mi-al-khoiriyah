<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'classroom_id' => ['nullable', 'numeric'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8'],
            'role' => ['nullable', 'numeric'],
            'birthplace' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'status' => ['required', 'string'],
            'child_no' => ['required', 'string'],
            'siblings' => ['required', 'string'],
            'kk' => ['required', 'numeric', 'min:16'],
            'nisn' => ['required', 'numeric', 'min:10'],
            'nis' => ['nullable', 'numeric', 'min:8'],
            'address' => ['required', 'string'],
            'address_no' => ['required', 'string'],
            'address_rt' => ['required', 'numeric'],
            'address_rw' => ['required', 'numeric'],
            'kelurahan' => ['required', 'string'],
            'kecamatan' => ['required', 'string'],
            'city' => ['required', 'string'],
            'pos_code' => ['required', 'numeric', 'min:5'],
            'from_school' => ['required', 'string'],
            'from_school_address' => ['required', 'string'],
            'from_school_level' => ['required', 'string'],
            'uniform_size' => ['required', 'string'],
            'phone_number' => ['required', 'numeric', 'min:10'],
            // 'photo' => ['nullable', 'mimes:jpg, png, pdf', 'file'],
            // 'kip_photo' => ['nullable', 'mimes:jpg, png, pdf', 'file'],
            // 'kk_photo' => ['nullable', 'mimes:jpg, png, pdf', 'file'],
            'father_name' => ['nullable', 'string'],
            'father_nik' => ['nullable', 'numeric', 'min:16'],
            'father_birthplace' => ['nullable', 'string'],
            'father_birthdate' => ['nullable', 'date'],
            'father_education' => ['nullable', 'string'],
            'father_job' => ['nullable', 'string'],
            'father_income' => ['nullable', 'string'],
            // 'father_ktp' => ['nullable', 'mimes:jpg, png, pdf', 'file'],
            'mother_name' => ['nullable', 'string'],
            'mother_nik' => ['nullable', 'numeric', 'min:16'],
            'mother_birthplace' => ['nullable', 'string'],
            'mother_birthdate' => ['nullable', 'date'],
            'mother_education' => ['nullable', 'string'],
            'mother_job' => ['nullable', 'string'],
            'mother_income' => ['nullable', 'string'],
            // 'mother_ktp' => ['nullable', 'mimes:jpg, png, pdf', 'file'],
            'wali_name' => ['nullable', 'string'],
            'wali_nik' => ['nullable', 'numeric', 'min:16'],
            'wali_birthplace' => ['nullable', 'string'],
            'wali_birthdate' => ['nullable', 'date'],
            'wali_education' => ['nullable', 'string'],
            'wali_job' => ['nullable', 'string'],
            'wali_income' => ['nullable', 'string'],
            // 'wali_ktp' => ['nullable', 'mimes:jpg, png, pdf', 'file'],
            'wali_phone' => ['nullable', 'numeric', 'min:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $education_default = null;
        $income_default = null;

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
        
        $nisn = Student::create([
            'user_id' => $user->id,
            'birthplace' => $data['birthplace'],
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'status' => $data['status'],
            'child_no' => $data['child_no'],
            'siblings' => $data['siblings'],
            'kk' => $data['kk'],
            // 'kk_photo' => $data['kk'],
            'nisn' => $data['nisn'],
            'nis' => $data['nis'],
            'address' => $data['address'],
            'address_no' => $data['address_no'],
            'address_rt' => $data['address_rt'],
            'address_rw' => $data['address_rw'],
            'kelurahan' => $data['kelurahan'],
            'kecamatan' => $data['kecamatan'],
            'city' => $data['city'],
            'pos_code' => $data['pos_code'],
            'from_school' => $data['from_school'],
            'from_school_address' => $data['from_school_address'],
            'from_school_level' => $data['from_school_level'],
            'uniform_size' => $data['uniform_size'],
            'phone_number' => $data['phone_number'],
            // 'photo' => $photo_path,
            // 'kip_photo' => $data['kip_photo'],
            'father_name' => $data['father_name'],
            'father_nik' => $data['father_nik'],
            'father_birthplace' => $data['father_birthplace'],
            'father_birthdate' => $data['father_birthdate'],
            'father_education' => $data['father_education'] ?? $education_default,
            'father_job' => $data['father_job'],
            'father_income' => $data['father_income'] ?? $income_default,
            // 'father_ktp' => $data['father_ktp'],
            'mother_name' => $data['mother_name'],
            'mother_nik' => $data['mother_nik'],
            'mother_birthplace' => $data['mother_birthplace'],
            'mother_birthdate' => $data['mother_birthdate'],
            'mother_education' => $data['mother_education'] ?? $education_default,
            'mother_job' => $data['mother_job'],
            'mother_income' => $data['mother_income'] ?? $income_default,
            // 'mother_ktp' => $data['mother_ktp'],
            'wali_name' => $data['wali_name'],
            'wali_nik' => $data['wali_nik'],
            'wali_birthplace' => $data['wali_birthplace'],
            'wali_birthdate' => $data['wali_birthdate'],
            'wali_education' => $data['wali_education'] ?? $education_default,
            'wali_job' => $data['wali_job'],
            'wali_income' => $data['wali_income'] ?? $income_default,
            // 'wali_ktp' => $data['wali_ktp'],
            'wali_phone' => $data['wali_phone'],
            
        ]);

        return $user;
    }
}
