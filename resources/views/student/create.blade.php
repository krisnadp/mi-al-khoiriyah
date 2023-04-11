@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Student Create</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Student</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bagus Adi" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Grade</label>
                    <select class="form-select" aria-label="Default select example" name="grade">
                        <option selected disabled>Open this select menu</option>
                        <option value="K">Kindergarten</option>
                        <option value="ES">Elementary School</option>
                        <option value="MS">Middle School</option>
                        <option value="HS">High School</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Start of Year</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2022" name="start_year">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Class</label>
                    <select class="form-select" aria-label="Default select example" name="class">
                        <option selected disabled>Open this select menu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Classroom</label>
                    <select class="form-select" aria-label="Default select example" name="classroom_id">
                        <option selected disabled>Open this select menu</option>
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->code }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">End of Year</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="2028" name="end_year">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="position-relative">
                <div class="py-4"></div>
                <div class="position-absolute bottom-0 end-0">
                    <button class="btn btn-secondary">Cancel</button>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
@endsection
