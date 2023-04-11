@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Classroom Edit</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Classroom</li>
                <li class="breadcrumb-item">Edit</li>
                <li class="breadcrumb-item active">{{ $classroom->code }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <form action="/classroom/update/{{ $classroom->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="grade">
                        <option>-- Pilih Kelas --</option>
                        <option @if ($classroom->grade == 1) selected @endif value="1">1</option>
                        <option @if ($classroom->grade == 2) selected @endif value="2">2</option>
                        <option @if ($classroom->grade == 3) selected @endif value="3">3</option>
                        <option @if ($classroom->grade == 4) selected @endif value="4">4</option>
                        <option @if ($classroom->grade == 5) selected @endif value="5">5</option>
                        <option @if ($classroom->grade == 6) selected @endif value="6">6</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Abjad</label>
                    <select class="form-select" aria-label="Default select example" name="name">
                        <option>-- Pilih Abjad --</option>
                        <option @if ($classroom->name == 'A') selected @endif value="A">A</option>
                        <option @if ($classroom->name == 'B') selected @endif value="B">B</option>
                        <option @if ($classroom->name == 'C') selected @endif value="C">C</option>
                    </select>
                </div>
                <div class="container">
                    <div class="position-relative">
                        <div class="py-4"></div>
                        <div class="py-2"></div>
                        <div class="position-absolute bottom-0 end-0">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Delete
                            </button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
        </div>
    </form>

    <form action="/classroom/delete/{{ $classroom->id }}" method="POST" class="d-inline">
        @csrf
        @method('delete')

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Classroom</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete this Classroom?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete Classroom</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
