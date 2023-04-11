@extends('layouts.appWhite')

@section('content')
<div class="container">

    <div class="container">
        <h2 class="text-center fw-bold">FORMULIR PENDAFTARAN CALON SISWA <br> YAYASAN PESANTRAN ALKARIMIYAH</h2>
        <hr>
    </div>

    <div class="container mt-5">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6">
                    
                    <h4 class="py-3">A. Data Pribadi Calon Siswa</h4>
                    
                    <div class="row mb-3">
                        <label for="name" class="col-md-3 col-form-label">Nama Lengkap</label>
        
                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="birthplace" type="text" class="form-control @error('birthplace') is-invalid @enderror" name="birthplace" value="{{ old('birthplace') }}"  autocomplete="birthplace" autofocus>
        
                            @error('birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}"  autocomplete="birthdate" autofocus>
        
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
                                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
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
                                <option selected disabled>-- Pilih Status Anak --</option>
                                <option value="Anak Kandung">Anak Kandung</option>
                                <option value="Bukan Anak Kandung">Bukan Anak Kandung</option>
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
                                <option selected disabled>-- Pilih Anak ke --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="Lebih dari 8">Lebih dari 8</option>
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
                                <option selected disabled>-- Pilih Jumlah Saudara --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="Lebih dari 8">Lebih dari 8</option>
                              </select>
        
                            @error('siblings')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <div class="row mb-1">
                        <label for="kk" class="col-md-3 col-form-label">No Kartu Keluarga</label>

                        <div class="col-md-9">
                            <input id="kk" type="text" class="form-control @error('kk') is-invalid @enderror" name="kk" value="{{ old('kk') }}"  autocomplete="kk" autofocus>
        
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
                            <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}"  autocomplete="nisn" autofocus>
        
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
                            <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}"  autocomplete="nis" autofocus>
        
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
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>
        
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
                            <input id="address_no" type="text" class="form-control @error('address') is-invalid @enderror" name="address_no" value="{{ old('address_no') }}" placeholder="NO/BLOK"  autocomplete="address_no" autofocus>
        
                            @error('address_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <input id="address_rt" type="text" class="form-control @error('address_rt') is-invalid @enderror" name="address_rt" value="{{ old('address_rt') }}" placeholder="RT"  autocomplete="address_rt" autofocus>
        
                            @error('address_rt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <input id="address_rw" type="text" class="form-control @error('address_rw') is-invalid @enderror" name="address_rw" value="{{ old('address_rw') }}" placeholder="RW"  autocomplete="address_rw" autofocus>
        
                            @error('address_rw')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mb-1">
                        <label for="kelurahan" class="col-md-3 col-form-label">Kelurahan / Desa</label>

                        <div class="col-md-9">
                            <input id="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" value="{{ old('kelurahan') }}"  autocomplete="kelurahan" autofocus>
        
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
                            <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ old('kecamatan') }}"  autocomplete="kecamatan" autofocus>
        
                            @error('kecamatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row mb-1">
                        <label for="city" class="col-md-3 col-form-label">Kota / Kabupaten</label>

                        <div class="col-md-9">
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autocomplete="city" autofocus>
        
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
                            <input id="pos_code" type="text" class="form-control @error('pos_code') is-invalid @enderror" name="pos_code" value="{{ old('pos_code') }}"  autocomplete="pos_code" autofocus>
        
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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
        
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
                            <input id="text" type="from_school" class="form-control @error('from_school') is-invalid @enderror" name="from_school" value="{{ old('from_school') }}"  autocomplete="from_school" autofocus>
        
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
                            <textarea class="form-control @error('from_school_address') is-invalid @enderror" name="from_school_address" value="{{ old('from_school_address') }}"  autocomplete="from_school_address" autofocus rows="3"></textarea>
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
                                <option selected disabled>-- Pilih Jenjang --</option>
                                <option value="Mts Alkarimiyah (Tidak Mukim)">Mts Alkarimiyah (Tidak Mukim)</option>
                                <option value="Mts Alkarimiyah (Dengan Mukim)">Mts Alkarimiyah (Dengan Mukim)</option>
                                <option value="MA Alkarimiyah (Tidak Mukim)">MA Alkarimiyah (Tidak Mukim)</option>
                                <option value="MA Alkarimiyah (Dengan Mukim)">MA Alkarimiyah (Dengan Mukim)</option>
                                <option value="MI Alkarimiyah">MI Alkarimiyah</option>
                              </select>
        
                            @error('from_school_level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <div class="row mb-1">
                        <label for="uniform_size" class="col-md-3 col-form-label">Ukuran Seragam</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('uniform_size') is-invalid @enderror" name="uniform_size" >
                                <option selected disabled>-- Pilih Ukuran Seragam --</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
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
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}"  autocomplete="phone_number" autofocus>
        
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    
                    <h4 class="pt-3">B. Data Orang Tua Calon Siswa</h4>
                    
                    <h5 class="pt-2 pb-1">1. Ayah</h5>
                    
                    <div class="row mb-3">
                        <label for="father_name" class="col-md-3 col-form-label">Nama Ayah</label>
        
                        <div class="col-md-9">
                            <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}"  autocomplete="father_name" autofocus>
        
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
                            <input id="father_nik" type="text" class="form-control @error('father_nik') is-invalid @enderror" name="father_nik" value="{{ old('father_nik') }}"  autocomplete="father_nik" autofocus>
        
                            @error('father_nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="father_birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="father_birthplace" type="text" class="form-control @error('father_birthplace') is-invalid @enderror" name="father_birthplace" value="{{ old('father_birthplace') }}"  autocomplete="father_birthplace" autofocus>
        
                            @error('father_birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="father_birthdate" type="date" class="form-control @error('father_birthdate') is-invalid @enderror" name="father_birthdate" value="{{ old('father_birthdate') }}"  autocomplete="father_birthdate" autofocus>
        
                            @error('father_birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="father_education" class="col-md-3 col-form-label">Pendidikan Terakhir</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('father_education') is-invalid @enderror" name="father_education" >
                                <option selected disabled>-- Pilih Pendidikan Terakhir Ayah --</option>
                                <option value="Kurang Dari SD Sederajat">Kurang Dari SD Sederajat</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1 / D3 Sederajat">D1 / D3 Sederajat</option>
                                <option value="S1 Sederajat">S1 Sederajat</option>
                                <option value="S2 Sederajat">S2 Sederajat</option>
                                <option value="S3 Sederajat">S3 Sederajat</option>
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
                            <input id="father_job" type="text" class="form-control @error('father_job') is-invalid @enderror" name="father_job" value="{{ old('father_job') }}"  autocomplete="father_job" autofocus>
        
                            @error('father_job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-1">
                        <label for="father_income" class="col-md-3 col-form-label">Penghasilan</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('father_income') is-invalid @enderror" name="father_income" >
                                <option selected disabled>-- Pilih Penghasilan Ayah --</option>
                                <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                <option value="Rp. 500.000 - 1.000.0000">Rp. 500.000 - 1.000.0000</option>
                                <option value="Rp. 1.500.000 - 2.000.0000">Rp. 1.500.000 - 2.000.0000</option>
                                <option value="Rp. 2.500.000 - 3.000.0000">Rp. 2.500.000 - 3.000.0000</option>
                                <option value="Rp. 3.000.000 - 5.000.0000">Rp. 3.000.000 - 5.000.0000</option>
                                <option value="Lebih dari Rp. 5.000.0000">Lebih dari Rp. 5.000.0000</option>
                              </select>
        
                            @error('father_income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>
                    
                    <h5 class="pt-3 pb-1">2. Ibu</h5>
                    
                    <div class="row mb-1">
                        <label for="mother_name" class="col-md-3 col-form-label">Nama Ibu Kandung</label>
        
                        <div class="col-md-9">
                            <input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}"  autocomplete="mother_name" autofocus>
        
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
                            <input id="mother_nik" type="text" class="form-control @error('mother_nik') is-invalid @enderror" name="mother_nik" value="{{ old('mother_nik') }}"  autocomplete="mother_nik" autofocus>
        
                            @error('mother_nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="mother_birthplace" class="col-md-3 col-form-label">Tempat Tanggal Lahir</label>

                        <div class="col-md-5">
                            <input id="mother_birthplace" type="text" class="form-control @error('mother_birthplace') is-invalid @enderror" name="mother_birthplace" value="{{ old('mother_birthplace') }}"  autocomplete="mother_birthplace" autofocus>
        
                            @error('mother_birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="mother_birthdate" type="date" class="form-control @error('mother_birthdate') is-invalid @enderror" name="mother_birthdate" value="{{ old('mother_birthdate') }}"  autocomplete="mother_birthdate" autofocus>
        
                            @error('mother_birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        <label for="mother_education" class="col-md-3 col-form-label">Pendidikan Terakhir</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('mother_education') is-invalid @enderror" name="mother_education" >
                                <option selected disabled>-- Pilih Pendidikan Terakhir Ibu --</option>
                                <option value="Kurang Dari SD Sederajat">Kurang Dari SD Sederajat</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1 / D3 Sederajat">D1 / D3 Sederajat</option>
                                <option value="S1 Sederajat">S1 Sederajat</option>
                                <option value="S2 Sederajat">S2 Sederajat</option>
                                <option value="S3 Sederajat">S3 Sederajat</option>
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
                            <input id="mother_job" type="text" class="form-control @error('mother_job') is-invalid @enderror" name="mother_job" value="{{ old('mother_job') }}"  autocomplete="mother_job" autofocus>
        
                            @error('mother_job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-1">
                        <label for="mother_income" class="col-md-3 col-form-label">Penghasilan</label>

                        <div class="col-md-9">
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus> --}}
                            <select class="form-select @error('mother_income') is-invalid @enderror" name="mother_income" >
                                <option selected disabled>-- Pilih Penghasilan Ibu --</option>
                                <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                <option value="Rp. 500.000 - 1.000.0000">Rp. 500.000 - 1.000.0000</option>
                                <option value="Rp. 1.500.000 - 2.000.0000">Rp. 1.500.000 - 2.000.0000</option>
                                <option value="Rp. 2.500.000 - 3.000.0000">Rp. 2.500.000 - 3.000.0000</option>
                                <option value="Rp. 3.000.000 - 5.000.0000">Rp. 3.000.000 - 5.000.0000</option>
                                <option value="Lebih dari Rp. 5.000.0000">Lebih dari Rp. 5.000.0000</option>
                              </select>
        
                            @error('mother_income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                    </div>

                    <h5 class="pt-3 pb-1">3. Wali Calon Siswa</h5>
                    
                    <div class="row mb-3">
                        <label for="wali_name" class="col-md-3 col-form-label">Nama Wali</label>
        
                        <div class="col-md-9">
                            <input id="wali_name" type="text" class="form-control @error('wali_name') is-invalid @enderror" name="wali_name" value="{{ old('wali_name') }}" autocomplete="wali_name" autofocus>
        
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
                            <input id="wali_nik" type="text" class="form-control @error('wali_nik') is-invalid @enderror" name="wali_nik" value="{{ old('wali_nik') }}" autocomplete="wali_nik" autofocus>
        
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
                            <input id="wali_birthplace" type="text" class="form-control @error('wali_birthplace') is-invalid @enderror" name="wali_birthplace" value="{{ old('wali_birthplace') }}" autocomplete="wali_birthplace" autofocus>
        
                            @error('wali_birthplace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-4">
                            <input id="wali_birthdate" type="date" class="form-control @error('wali_birthdate') is-invalid @enderror" name="wali_birthdate" value="{{ old('wali_birthdate') }}" autocomplete="wali_birthdate" autofocus>
        
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
                                <option value="Kurang Dari SD Sederajat">Kurang Dari SD Sederajat</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1 / D3 Sederajat">D1 / D3 Sederajat</option>
                                <option value="S1 Sederajat">S1 Sederajat</option>
                                <option value="S2 Sederajat">S2 Sederajat</option>
                                <option value="S3 Sederajat">S3 Sederajat</option>
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
                            <input id="wali_job" type="text" class="form-control @error('wali_job') is-invalid @enderror" name="wali_job" value="{{ old('wali_job') }}" autocomplete="wali_job" autofocus>
        
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
                                <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                <option value="Rp. 500.000 - 1.000.0000">Rp. 500.000 - 1.000.0000</option>
                                <option value="Rp. 1.500.000 - 2.000.0000">Rp. 1.500.000 - 2.000.0000</option>
                                <option value="Rp. 2.500.000 - 3.000.0000">Rp. 2.500.000 - 3.000.0000</option>
                                <option value="Rp. 3.000.000 - 5.000.0000">Rp. 3.000.000 - 5.000.0000</option>
                                <option value="Lebih dari Rp. 5.000.0000">Lebih dari Rp. 5.000.0000</option>
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
                            <input id="wali_phone" type="text" class="form-control @error('wali_phone') is-invalid @enderror" name="wali_phone" value="{{ old('wali_phone') }}" autocomplete="wali_phone" autofocus>
        
                            @error('wali_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mb-0">
                <center>
                    <button type="reset" class="btn btn-secondary w-25">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary w-25">
                        Daftar
                    </button>
                </center>
            </div>

        </form>
    </div>
    
    {{-- <div class="container mt-5">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-5">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-5">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-5">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-5">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <center>
                    <button type="submit" class="btn btn-primary w-50">
                        {{ __('Register') }}
                    </button>
                </center>
            </div>
        </form>
    </div> --}}
    
</div>
@endsection
