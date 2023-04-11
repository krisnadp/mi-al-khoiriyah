@extends('layouts.app')

@section('app.name', 'MI AL KHORIYAH')

@section('content')
<div class="container pt-5">

    <div class="container">
        <div class="text-center">
            <img class="img-fluid w-25 mx-auto d-block" src="{{ asset('img/logo.png') }}" alt="Logo">
          </div>
    </div>
    
    <div class="container mt-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-5">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                <div class="col-md-5">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <center>
                    <button type="submit" class="btn btn-primary w-25">
                        {{ __('Login') }}
                    </button>
                </center>
            </div>
        </form>
    </div>
    
</div>
@endsection
