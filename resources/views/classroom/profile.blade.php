@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Classroom Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Classroom</li>
                <li class="breadcrumb-item active">{{ $classroom->code }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <h4>Classroom Data</h4>
    <table class="table">
        <tr>
            <td>Name</td>
            <td class="fw-bold">{{ $classroom->name }}</td>
        </tr>
        <tr>
            <td>Classroom Id</td>
            <td class="fw-bold">{{ $classroom->code }}</td>
        </tr>
        <tr>
            <td>Grade</td>
            <td class="fw-bold">
                @if ( $classroom->grade == 'K' )
                    Kindergarten
                @elseif ( $classroom->grade == 'ES' )
                    Elementary School
                @elseif ( $classroom->grade == 'MS' )
                    Middle School
                @else
                    High School
                @endif
            </td>
        </tr>
        <tr>
            <td>Homeroom Teacher</td>
            <td class="fw-bold">
                {{$classroom->teacher->name  }}
            </td>
        </tr>
    </table>

    <table class="table table-fluid table-striped mt-4">
        <thead class="text-center">
            <th>#</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Action</th>
        </thead>
        <tbody class="">
                <tr>
                    <td class="text-center">1</td>
                    <td>{{ $schedule->mon }}</td>
                    <td>{{ $schedule->tue }}</td>
                    <td>{{ $schedule->wed }}</td>
                    <td>{{ $schedule->thu }}</td>
                    <td>{{ $schedule->fri }}</td>
                    <td>
                        <center>
                            <a class="btn btn-sm btn-warning" href="/schedule/edit/{{ $schedule->id }}">Edit</a>
                        </center>
                    </td>
                </tr>
        </tbody>
    </table>
    
@endsection
