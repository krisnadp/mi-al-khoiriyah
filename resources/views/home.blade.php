@extends('layouts.homeApp')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row py-5">

        <div class="container-fluid">
            <div class="container rounded-pill" style="background-image: url('img/bg.jpg')">
                <div class="container py-5">
                    <h3 class="text-center fw-bold">DATABASE SISWA</h3>
                    <h6 class="text-center fw-bold">MI AL KHOIRIYAH SAWANGAN</h6>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <h1 class="text-center">Hello, {{ Auth::user()->name }} !</h1>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">NIS</h5>
        
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="mt-2 ps-3">
                                    <h4>{{ Auth::user()->id }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">NISN</h5>
        
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="mt-2 ps-3">
                                    <h4>{{ Auth::user()->id }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">KELAS</h5>
        
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house"></i>
                                </div>
                                <div class="mt-2 ps-3">
                                    <h4>{{ Auth::user()->id }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        {{-- <!-- Customers Card -->
        <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

                <div class="card-body">
                    <h5 class="card-title">Student</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $studentCount }}</h6>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Customers Card -->

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Teacher</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $teacherCount }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Subject</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-book"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $subjectCount }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

                <div class="card-body">
                    <h5 class="card-title">Classroom</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-house"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $classroomCount }}</h6>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Customers Card --> --}}

    </div>
@endsection
