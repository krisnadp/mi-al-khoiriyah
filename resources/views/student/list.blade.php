@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Student</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Student</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <table class="table table-fluid table-hover mt-4">
        <thead class="text-center">
            <th>#</th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>TEMPAT LAHIR</th>
            <th>TAGGAL LAHIR</th>
            <th>UMUR</th>
            <th>STATUS</th>
            <th>AKSI</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td class="text-center">{{ ($students ->currentpage()-1) * $students ->perpage() + $loop->index + 1 }}</td>
                    <td class="text-center text-uppercase">{{ $student->nisn }}</td>
                    <td class="text-center text-uppercase">{{ $student->user->name }}</td>
                    <td class="text-center text-uppercase">{{ $student->birthplace }}</td>
                    <td class="text-center text-uppercase">{{ \Carbon\Carbon::parse($student->birthdate)->format('d/m/Y') }}</td>
                    <td class="text-center text-uppercase">{{ \Carbon\Carbon::parse($student->birthdate)->age }}</td>
                    @if ($student->user->role == 1)
                        <td class="text-center text-uppercase"><span class="badge text-bg-success">Aktif</span></td>
                    @else
                        <td class="text-center text-uppercase"><span class="badge text-bg-secondary">Tidak Aktif</span></td>
                    @endif
                    <td>
                        <center>
                            <a class="btn btn-sm btn-primary" href="/student/{{ $student->id }}">LIHAT</a>
                            <a class="btn btn-sm btn-warning" href="/student/edit/{{ $student->id }}">UBAH</a>
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
                {{ $students->links() }}
            </div>
        </div>
    </div>
    
@endsection
