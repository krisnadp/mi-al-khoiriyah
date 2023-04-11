@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Classroom</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Classroom</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <table class="table table-fluid table-hover mt-4">
        <thead class="text-center">
            <th>#</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </thead>
        <tbody class="">
            @foreach ($classrooms as $classroom)
                <tr>
                    <td class="text-center text-uppercase">{{ ($classrooms ->currentpage()-1) * $classrooms ->perpage() + $loop->index + 1 }}</td>
                    <td class="text-center text-uppercase">{{ $classroom->code }}</td>
                    <td>
                        <center>
                            <a class="btn btn-sm btn-primary" href="/classroom/{{ $classroom->id }}">LIHAT</a>
                            <a class="btn btn-sm btn-warning" href="/classroom/edit/{{ $classroom->id }}">UBAH</a>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <div class="position-relative">
            <div class="py-4"></div>
            <div class="py-1"></div>
            <div class="position-absolute bottom-0 end-0">
                {{ $classrooms->links() }}
            </div>
        </div>
    </div>
    
@endsection
