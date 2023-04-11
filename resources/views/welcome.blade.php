@extends('layouts.app')

@section('app.name', 'MI AL KHORIYAH')

@section('content')
<div class="container">

    <div class="container mt-5">
        <div class="text-center">
            <img class="img-fluid w-25 mx-auto d-block" src="{{ asset('img/logo.png') }}" alt="Logo">
          </div>
    </div>

    <div class="container mt-2">
        <h1 class="h1 text-center">DATABASE SISWA</h1>
        <h5 class="text-center">MI AL KHOIRIYAH SAWANGAN</h5>
    </div>

    <div class="container mt-2">
        <a href="{{ route('login') }}" class="mt-4 btn btn-primary btn-lg w-100">LOGIN</a>
        <p class="mt-3 text-center">Belum punya akun? <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">Buat Akun</a></p>
    </div>
    
</div>
@endsection
