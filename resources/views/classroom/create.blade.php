@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Classroom Create</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Classroom</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <form action="{{ route('classroom.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="grade">
                        <option selected disabled>-- Pilih Kelas --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Abjad</label>
                    <select class="form-select" aria-label="Default select example" name="name">
                        <option selected disabled>-- Pilih Abjad --</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="container">
                    <div class="position-relative">
                        <div class="py-4"></div>
                        <div class="py-2"></div>
                        <div class="position-absolute bottom-0 end-0">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
        </div>
    </form>
@endsection
