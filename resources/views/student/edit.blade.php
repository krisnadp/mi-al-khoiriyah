@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Student Create</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Student</li>
                <li class="breadcrumb-item">Edit</li>
                <li class="breadcrumb-item active">{{ $student->user->name }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <form action="/student/update/{{ $student->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Data Siswa
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row mb-3">
                        <label for="name" class="col-md-3 col-form-label">Nama Lengkap</label>
        
                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $student->user->name }}"  autocomplete="name" autofocus>
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="birthplace" type="text" class="form-control @error('birthplace') is-invalid @enderror" name="birthplace" value="{{ $student->birthplace }}"  autocomplete="birthplace" autofocus>
        
                            @error('birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $student->birthdate }}"  autocomplete="birthdate" autofocus>
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="gender" class="col-md-3 col-form-label">Jenis Kelamin</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('gender') is-invalid @enderror" name="gender" >
                                <option>-- Pilih Jenis Kelamin --</option>
                                <option @if ($student->gender == 'Laki-laki') selected @endif value="Laki-laki">Laki-laki</option>
                                <option @if ($student->gender == 'Perempuan') selected @endif value="Perempuan">Perempuan</option>
                              </select>
        
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="status" class="col-md-3 col-form-label">Status Anak</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('status') is-invalid @enderror" name="status" >
                                <option >-- Pilih Status Anak --</option>
                                <option @if ($student->status == 'Anak Kandung') selected @endif value="Anak Kandung">Anak Kandung</option>
                                <option @if ($student->status == 'Bukan Anak Kandung') selected @endif value="Bukan Anak Kandung">Bukan Anak Kandung</option>
                              </select>
        
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="child_no" class="col-md-3 col-form-label">Anak ke</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('child_no') is-invalid @enderror" name="child_no" >
                                <option>-- Pilih Anak ke --</option>
                                <option @if ($student->child_no == 1) selected @endif  value="1">1</option>
                                <option @if ($student->child_no == 2) selected @endif value="2">2</option>
                                <option @if ($student->child_no == 3) selected @endif value="3">3</option>
                                <option @if ($student->child_no == 4) selected @endif value="4">4</option>
                                <option @if ($student->child_no == 5) selected @endif value="5">5</option>
                                <option @if ($student->child_no == 6) selected @endif value="6">6</option>
                                <option @if ($student->child_no == 7) selected @endif value="7">7</option>
                                <option @if ($student->child_no == 8) selected @endif value="8">8</option>
                                <option @if ($student->child_no == 'Lebih dari 8') selected @endif value="Lebih dari 8">Lebih dari 8</option>
                              </select>
        
                            @error('child_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="siblings" class="col-md-3 col-form-label">Jumlah Saudara</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('siblings') is-invalid @enderror" name="siblings" >
                                <option>-- Pilih Jumlah Saudara --</option>
                                <option @if ($student->child_no == 1) selected @endif  value="1">1</option>
                                <option @if ($student->child_no == 2) selected @endif value="2">2</option>
                                <option @if ($student->child_no == 3) selected @endif value="3">3</option>
                                <option @if ($student->child_no == 4) selected @endif value="4">4</option>
                                <option @if ($student->child_no == 5) selected @endif value="5">5</option>
                                <option @if ($student->child_no == 6) selected @endif value="6">6</option>
                                <option @if ($student->child_no == 7) selected @endif value="7">7</option>
                                <option @if ($student->child_no == 8) selected @endif value="8">8</option>
                                <option @if ($student->child_no == 'Lebih dari 8') selected @endif value="Lebih dari 8">Lebih dari 8</option>
                              </select>
        
                            @error('siblings')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="kk" class="col-md-3 col-form-label">No Kartu Keluarga</label>

                        <div class="col-md-9">
                            <input id="kk" type="text" class="form-control @error('kk') is-invalid @enderror" name="kk" value="{{ $student->kk }}"  autocomplete="kk" autofocus>
        
                            @error('kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="nisn" class="col-md-3 col-form-label">NISN</label>

                        <div class="col-md-9">
                            <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $student->nisn }}"  autocomplete="nisn" autofocus>
        
                            @error('nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="nis" class="col-md-3 col-form-label">NIS</label>

                        <div class="col-md-9">
                            <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $student->nis }}"  autocomplete="nis" autofocus>
        
                            @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-3">
                        <label for="address" class="col-md-3 col-form-label">Alamat Lengkap</label>

                        <div class="col-md-9">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $student->address }}"  autocomplete="address" autofocus>
        
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-3 col-form-label"></label>

                        
                        <div class="col-md-3">
                            <input id="address_no" type="text" class="form-control @error('address') is-invalid @enderror" name="address_no" value="{{ $student->address_no }}" placeholder="NO/BLOK"  autocomplete="address_no" autofocus>
        
                            @error('address_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <input id="address_rt" type="text" class="form-control @error('address_rt') is-invalid @enderror" name="address_rt" value="{{ $student->address_rt }}" placeholder="RT"  autocomplete="address_rt" autofocus>
        
                            @error('address_rt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <input id="address_rw" type="text" class="form-control @error('address_rw') is-invalid @enderror" name="address_rw" value="{{ $student->address_rw }}" placeholder="RW"  autocomplete="address_rw" autofocus>
        
                            @error('address_rw')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="kelurahan" class="col-md-3 col-form-label">Kelurahan / Desa</label>

                        <div class="col-md-9">
                            <input id="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" value="{{ $student->kelurahan }}"  autocomplete="kelurahan" autofocus>
        
                            @error('kelurahan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="kecamatan" class="col-md-3 col-form-label">Kecamatan</label>

                        <div class="col-md-9">
                            <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ $student->kecamatan }}"  autocomplete="kecamatan" autofocus>
        
                            @error('kecamatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="city" class="col-md-3 col-form-label">Kota / Kabupaten</label>

                        <div class="col-md-9">
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $student->city }}"  autocomplete="city" autofocus>
        
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="pos_code" class="col-md-3 col-form-label">Kode Pos</label>

                        <div class="col-md-9">
                            <input id="pos_code" type="text" class="form-control @error('pos_code') is-invalid @enderror" name="pos_code" value="{{ $student->pos_code }}"  autocomplete="pos_code" autofocus>
        
                            @error('pos_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-3 col-form-label">Email</label>

                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $student->user->email }}"  autocomplete="email" autofocus>
        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror" name="password" value="password">

                    <div class="row mb-3">
                        <label for="from_school" class="col-md-3 col-form-label">Asal Sekolah</label>

                        <div class="col-md-9">
                            <input id="text" type="from_school" class="form-control @error('from_school') is-invalid @enderror" name="from_school" value="{{ $student->from_school }}"  autocomplete="from_school" autofocus>
        
                            @error('from_school')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="from_school_address" class="col-md-3 col-form-label">Alamat Sekolah</label>

                        <div class="col-md-9">
                            <textarea class="form-control @error('from_school_address') is-invalid @enderror" name="from_school_address"  autocomplete="from_school_address" autofocus rows="3">{{ $student->from_school_address }}</textarea>
                            {{-- <input id="text" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus> --}}
        
                            @error('from_school_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <label for="from_school_level" class="col-md-3 col-form-label">Jenjang</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('from_school_level') is-invalid @enderror" name="from_school_level" >
                                <option>-- Pilih Jenjang --</option>
                                <option @if ($student->from_school_level == 'Mts Alkarimiyah (Tidak Mukim)') selected @endif value="Mts Alkarimiyah (Tidak Mukim)">Mts Alkarimiyah (Tidak Mukim)</option>
                                <option @if ($student->from_school_level == 'Mts Alkarimiyah (Dengan Mukim)') selected @endif value="Mts Alkarimiyah (Dengan Mukim)">Mts Alkarimiyah (Dengan Mukim)</option>
                                <option @if ($student->from_school_level == 'MA Alkarimiyah (Tidak Mukim)') selected @endif value="MA Alkarimiyah (Tidak Mukim)">MA Alkarimiyah (Tidak Mukim)</option>
                                <option @if ($student->from_school_level == 'MA Alkarimiyah (Dengan Mukim)') selected @endif value="MA Alkarimiyah (Dengan Mukim)">MA Alkarimiyah (Dengan Mukim)</option>
                                <option @if ($student->from_school_level == 'MI Alkarimiyah') selected @endif value="MI Alkarimiyah">MI Alkarimiyah</option>
                              </select>
        
                            @error('from_school_level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-3">
                        <label for="uniform_size" class="col-md-3 col-form-label">Ukuran Seragam</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('uniform_size') is-invalid @enderror" name="uniform_size" >
                                <option>-- Pilih Ukuran Seragam --</option>
                                <option @if ($student->uniform_size == 'S') selected @endif value="S">S</option>
                                <option @if ($student->uniform_size == 'M') selected @endif value="M">M</option>
                                <option @if ($student->uniform_size == 'L') selected @endif value="L">L</option>
                                <option @if ($student->uniform_size == 'XL') selected @endif value="XL">XL</option>
                                <option @if ($student->uniform_size == 'XXL') selected @endif value="XXL">XXL</option>
                              </select>
        
                            @error('uniform_size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-3">
                        <label for="phone_number" class="col-md-3 col-form-label">No Hp Ayah / Ibu</label>
        
                        <div class="col-md-9">
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $student->phone_number }}"  autocomplete="phone_number" autofocus>
        
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Data Orang Tua
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h5 class="pt-2 pb-1">1. Ayah</h5>
                    
                    <div class="row mb-3">
                        <label for="father_name" class="col-md-3 col-form-label">Nama Ayah</label>
        
                        <div class="col-md-9">
                            <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ $student->father_name }}"  autocomplete="father_name" autofocus>
        
                            @error('father_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="father_nik" class="col-md-3 col-form-label">NIK</label>
        
                        <div class="col-md-9">
                            <input id="father_nik" type="text" class="form-control @error('father_nik') is-invalid @enderror" name="father_nik" value="{{ $student->father_nik }}"  autocomplete="father_nik" autofocus>
        
                            @error('father_nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="father_birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="father_birthplace" type="text" class="form-control @error('father_birthplace') is-invalid @enderror" name="father_birthplace" value="{{ $student->father_birthplace }}"  autocomplete="father_birthplace" autofocus>
        
                            @error('father_birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="father_birthdate" type="date" class="form-control @error('father_birthdate') is-invalid @enderror" name="father_birthdate" value="{{ $student->father_birthdate }}"  autocomplete="father_birthdate" autofocus>
        
                            @error('father_birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="father_education" class="col-md-3 col-form-label">Pendidikan Terakhir</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('father_education') is-invalid @enderror" name="father_education" >
                                <option>-- Pilih Pendidikan Terakhir Ayah --</option>
                                <option @if ($student->father_education == 'Kurang Dari SD Sederajat') selected @endif value="Kurang Dari SD Sederajat">Kurang Dari SD Sederajat</option>
                                <option @if ($student->father_education == 'SD Sederajat') selected @endif value="SD Sederajat">SD Sederajat</option>
                                <option @if ($student->father_education == 'SMP Sederajat') selected @endif value="SMP Sederajat">SMP Sederajat</option>
                                <option @if ($student->father_education == 'SMA Sederajat') selected @endif value="SMA Sederajat">SMA Sederajat</option>
                                <option @if ($student->father_education == 'D1 / D3 Sederajat') selected @endif value="D1 / D3 Sederajat">D1 / D3 Sederajat</option>
                                <option @if ($student->father_education == 'S1 Sederajat') selected @endif value="S1 Sederajat">S1 Sederajat</option>
                                <option @if ($student->father_education == 'S2 Sederajat') selected @endif value="S2 Sederajat">S2 Sederajat</option>
                                <option @if ($student->father_education == 'S3 Sederajat') selected @endif value="S3 Sederajat">S3 Sederajat</option>
                              </select>
        
                            @error('father_education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-3">
                        <label for="father_job" class="col-md-3 col-form-label">Pekerjaan Ayah</label>
        
                        <div class="col-md-9">
                            <input id="father_job" type="text" class="form-control @error('father_job') is-invalid @enderror" name="father_job" value="{{ $student->father_job }}"  autocomplete="father_job" autofocus>
        
                            @error('father_job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="father_income" class="col-md-3 col-form-label">Penghasilan</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('father_income') is-invalid @enderror" name="father_income" >
                                <option>-- Pilih Penghasilan Ayah --</option>
                                <option @if ($student->father_income == 'Kurang dari Rp. 500.000') selected @endif value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                <option @if ($student->father_income == 'Rp. 500.000 - 1.000.0000') selected @endif value="Rp. 500.000 - 1.000.0000">Rp. 500.000 - 1.000.0000</option>
                                <option @if ($student->father_income == 'Rp. 1.500.000 - 2.000.0000') selected @endif value="Rp. 1.500.000 - 2.000.0000">Rp. 1.500.000 - 2.000.0000</option>
                                <option @if ($student->father_income == 'Rp. 2.500.000 - 3.000.0000') selected @endif value="Rp. 2.500.000 - 3.000.0000">Rp. 2.500.000 - 3.000.0000</option>
                                <option @if ($student->father_income == 'Rp. 3.000.000 - 5.000.0000') selected @endif value="Rp. 3.000.000 - 5.000.0000">Rp. 3.000.000 - 5.000.0000</option>
                                <option @if ($student->father_income == 'Lebih dari Rp. 5.000.0000') selected @endif value="Lebih dari Rp. 5.000.0000">Lebih dari Rp. 5.000.0000</option>
                              </select>
        
                            @error('father_income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <h5 class="pt-3 pb-1">2. Ibu</h5>
                    
                    <div class="row mb-3">
                        <label for="mother_name" class="col-md-3 col-form-label">Nama Ibu Kandung</label>
        
                        <div class="col-md-9">
                            <input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ $student->mother_name }}"  autocomplete="mother_name" autofocus>
        
                            @error('mother_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="mother_name" class="col-md-3 col-form-label">NIK</label>
        
                        <div class="col-md-9">
                            <input id="mother_nik" type="text" class="form-control @error('mother_nik') is-invalid @enderror" name="mother_nik" value="{{ $student->mother_nik }}"  autocomplete="mother_nik" autofocus>
        
                            @error('mother_nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="mother_birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="mother_birthplace" type="text" class="form-control @error('mother_birthplace') is-invalid @enderror" name="mother_birthplace" value="{{ $student->mother_birthplace }}"  autocomplete="mother_birthplace" autofocus>
        
                            @error('mother_birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="mother_birthdate" type="date" class="form-control @error('mother_birthdate') is-invalid @enderror" name="mother_birthdate" value="{{ $student->mother_birthdate }}"  autocomplete="mother_birthdate" autofocus>
        
                            @error('mother_birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="mother_education" class="col-md-3 col-form-label">Pendidikan Terakhir</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('mother_education') is-invalid @enderror" name="mother_education" >
                                <option selected disabled>-- Pilih Pendidikan Terakhir Ibu --</option>
                                <option @if ($student->mother_education == 'Kurang Dari SD Sederajat') selected @endif value="Kurang Dari SD Sederajat">Kurang Dari SD Sederajat</option>
                                <option @if ($student->mother_education == 'SD Sederajat') selected @endif value="SD Sederajat">SD Sederajat</option>
                                <option @if ($student->mother_education == 'SMP Sederajat') selected @endif value="SMP Sederajat">SMP Sederajat</option>
                                <option @if ($student->mother_education == 'SMA Sederajat') selected @endif value="SMA Sederajat">SMA Sederajat</option>
                                <option @if ($student->mother_education == 'D1 / D3 Sederajat') selected @endif value="D1 / D3 Sederajat">D1 / D3 Sederajat</option>
                                <option @if ($student->mother_education == 'S1 Sederajat') selected @endif value="S1 Sederajat">S1 Sederajat</option>
                                <option @if ($student->mother_education == 'S2 Sederajat') selected @endif value="S2 Sederajat">S2 Sederajat</option>
                                <option @if ($student->mother_education == 'S3 Sederajat') selected @endif value="S3 Sederajat">S3 Sederajat</option>
                              </select>
        
                            @error('mother_education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-3">
                        <label for="mother_job" class="col-md-3 col-form-label">Pekerjaan Ibu</label>
        
                        <div class="col-md-9">
                            <input id="mother_job" type="text" class="form-control @error('mother_job') is-invalid @enderror" name="mother_job" value="{{ $student->mother_job }}"  autocomplete="mother_job" autofocus>
        
                            @error('mother_job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mother_income" class="col-md-3 col-form-label">Penghasilan</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('mother_income') is-invalid @enderror" name="mother_income" >
                                <option selected disabled>-- Pilih Penghasilan Ibu --</option>
                                <option @if ($student->mother_income == 'Kurang dari Rp. 500.000') selected @endif value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                <option @if ($student->mother_income == 'Rp. 500.000 - 1.000.0000') selected @endif value="Rp. 500.000 - 1.000.0000">Rp. 500.000 - 1.000.0000</option>
                                <option @if ($student->mother_income == 'Rp. 1.500.000 - 2.000.0000') selected @endif value="Rp. 1.500.000 - 2.000.0000">Rp. 1.500.000 - 2.000.0000</option>
                                <option @if ($student->mother_income == 'Rp. 2.500.000 - 3.000.0000') selected @endif value="Rp. 2.500.000 - 3.000.0000">Rp. 2.500.000 - 3.000.0000</option>
                                <option @if ($student->mother_income == 'Rp. 3.000.000 - 5.000.0000') selected @endif value="Rp. 3.000.000 - 5.000.0000">Rp. 3.000.000 - 5.000.0000</option>
                                <option @if ($student->mother_income == 'Lebih dari Rp. 5.000.0000') selected @endif value="Lebih dari Rp. 5.000.0000">Lebih dari Rp. 5.000.0000</option>
                              </select>
        
                            @error('mother_income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Data Wali
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row mb-3">
                        <label for="wali_name" class="col-md-3 col-form-label">Nama Wali</label>
        
                        <div class="col-md-9">
                            <input id="wali_name" type="text" class="form-control @error('wali_name') is-invalid @enderror" name="wali_name" value="{{ $student->wali_name }}" autocomplete="wali_name" autofocus>
        
                            @error('wali_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="wali_nik" class="col-md-3 col-form-label">NIK</label>
        
                        <div class="col-md-9">
                            <input id="wali_nik" type="text" class="form-control @error('wali_nik') is-invalid @enderror" name="wali_nik" value="{{ $student->wali_name }}" autocomplete="wali_nik" autofocus>
        
                            @error('wali_nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="wali_birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="wali_birthplace" type="text" class="form-control @error('wali_birthplace') is-invalid @enderror" name="wali_birthplace" value="{{ $student->wali_birthplace }}" autocomplete="wali_birthplace" autofocus>
        
                            @error('wali_birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="wali_birthdate" type="date" class="form-control @error('wali_birthdate') is-invalid @enderror" name="wali_birthdate" value="{{ $student->wali_birthdate }}" autocomplete="wali_birthdate" autofocus>
        
                            @error('wali_birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="wali_education" class="col-md-3 col-form-label">Pendidikan Terakhir</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('wali_education') is-invalid @enderror" name="wali_education">
                                <option selected disabled>-- Pilih Pendidikan Terakhir Wali --</option>
                                <option @if ($student->wali_education == 'Kurang Dari SD Sederajat') selected @endif value="Kurang Dari SD Sederajat">Kurang Dari SD Sederajat</option>
                                <option @if ($student->wali_education == 'SD Sederajat') selected @endif value="SD Sederajat">SD Sederajat</option>
                                <option @if ($student->wali_education == 'SMP Sederajat') selected @endif value="SMP Sederajat">SMP Sederajat</option>
                                <option @if ($student->wali_education == 'SMA Sederajat') selected @endif value="SMA Sederajat">SMA Sederajat</option>
                                <option @if ($student->wali_education == 'D1 / D3 Sederajat') selected @endif value="D1 / D3 Sederajat">D1 / D3 Sederajat</option>
                                <option @if ($student->wali_education == 'S1 Sederajat') selected @endif value="S1 Sederajat">S1 Sederajat</option>
                                <option @if ($student->wali_education == 'S2 Sederajat') selected @endif value="S2 Sederajat">S2 Sederajat</option>
                                <option @if ($student->wali_education == 'S3 Sederajat') selected @endif value="S3 Sederajat">S3 Sederajat</option>
                              </select>
        
                            @error('wali_education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-3">
                        <label for="wali_job" class="col-md-3 col-form-label">Pekerjaan Wali</label>
        
                        <div class="col-md-9">
                            <input id="wali_job" type="text" class="form-control @error('wali_job') is-invalid @enderror" name="wali_job" value="{{ $student->wali_job }}" autocomplete="wali_job" autofocus>
        
                            @error('wali_job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wali_income" class="col-md-3 col-form-label">Penghasilan</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('wali_income') is-invalid @enderror" name="wali_income">
                                <option selected disabled>-- Pilih Penghasilan Wali --</option>
                                <option @if ($student->wali_income == 'Kurang dari Rp. 500.000') selected @endif value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                <option @if ($student->wali_income == 'Rp. 500.000 - 1.000.0000') selected @endif value="Rp. 500.000 - 1.000.0000">Rp. 500.000 - 1.000.0000</option>
                                <option @if ($student->wali_income == 'Rp. 1.500.000 - 2.000.0000') selected @endif value="Rp. 1.500.000 - 2.000.0000">Rp. 1.500.000 - 2.000.0000</option>
                                <option @if ($student->wali_income == 'Rp. 2.500.000 - 3.000.0000') selected @endif value="Rp. 2.500.000 - 3.000.0000">Rp. 2.500.000 - 3.000.0000</option>
                                <option @if ($student->wali_income == 'Rp. 3.000.000 - 5.000.0000') selected @endif value="Rp. 3.000.000 - 5.000.0000">Rp. 3.000.000 - 5.000.0000</option>
                                <option @if ($student->wali_income == 'Lebih dari Rp. 5.000.0000') selected @endif value="Lebih dari Rp. 5.000.0000">Lebih dari Rp. 5.000.0000</option>
                              </select>
        
                            @error('wali_income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-3">
                        <label for="wali_phone" class="col-md-3 col-form-label">No Hp Wali</label>
        
                        <div class="col-md-9">
                            <input id="wali_phone" type="text" class="form-control @error('wali_phone') is-invalid @enderror" name="wali_phone" value="{{ $student->wali_phone }}" autocomplete="wali_phone" autofocus>
        
                            @error('wali_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        
        {{-- <div class="row mt-4">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $student->name }}"
                        name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Grade</label>
                    <select class="form-select" aria-label="Default select example" name="grade">
                        <option disabled>Open this select menu</option>
                        <option @if ($student->grade == 'K') selected @endif value="K">Kindergarten</option>
                        <option @if ($student->grade == 'ES') selected @endif value="ES">Elementary School</option>
                        <option @if ($student->grade == 'MS') selected @endif value="MS">Middle School</option>
                        <option @if ($student->grade == 'HS') selected @endif value="HS">High School</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Start of Year</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="{{ $student->start_year }}" name="start_year">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Class</label>
                    <select class="form-select" aria-label="Default select example" name="class">
                        <option disabled>Open this select menu</option>
                        <option @if ($student->grade == 1) selected @endif value="1">1</option>
                        <option @if ($student->grade == 2) selected @endif value="2">2</option>
                        <option @if ($student->grade == 3) selected @endif value="3">3</option>
                        <option @if ($student->grade == 4) selected @endif value="4">4</option>
                        <option @if ($student->grade == 5) selected @endif value="5">5</option>
                        <option @if ($student->grade == 6) selected @endif value="6">6</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Classroom</label>
                    <select class="form-select" aria-label="Default select example" name="classroom_id">
                        <option selected disabled>Open this select menu</option>
                        @foreach ($classrooms as $classroom)
                            <option @if ($student->classroom_id == $classroom->id) selected @endif value="{{ $classroom->id }}">
                                {{ $classroom->code }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">End of Year</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="{{ $student->end_year }}" name="end_year">
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="position-relative">
                <div class="py-4"></div>
                <div class="position-absolute bottom-0 end-0">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                    <button class="btn btn-secondary">Cancel</button>
                    <button class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </form>

    <form action="/student/delete/{{ $student->id }}" method="POST" class="d-inline">
        @csrf
        @method('delete')

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete this Student?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete Student</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
