@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Student Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Student</li>
                <li class="breadcrumb-item active">{{ $student->name }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <h4>Personal Data</h4>
    <table class="table">
        <tr>
            <td>Name</td>
            <td class="fw-bold">{{ $student->name }}</td>
        </tr>
        <tr>
            <td>Student Id</td>
            <td class="fw-bold">{{ $student->code }}</td>
        </tr>
        <tr>
            <td>Grade</td>
            @if ($student->grade == 'K')
                <td class="fw-bold">Kindergarten</td>
            @elseif ($student->grade == 'ES')
                <td class="fw-bold">Elementary School</td>
            @elseif ($student->grade == 'MD')
                <td class="fw-bold">Middle School</td>
            @elseif ($student->grade == 'HS')
                <td class="fw-bold">High School</td>
            @endif
        </tr>
        <tr>
            <td>Class</td>
            <td class="fw-bold">{{ $student->class }}</td>
        </tr>
        <tr>
            <td>Start of Year</td>
            <td class="fw-bold">{{ $student->start_year }}</td>
        </tr>
        <tr>
            <td>End of Year</td>
            <td class="fw-bold">{{ $student->end_year }}</td>
        </tr>
    </table>
    
@endsection
