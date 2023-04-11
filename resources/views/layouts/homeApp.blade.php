<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                {{-- <span class="d-none d-lg-block">CMS</span> --}}
                <img class="bi bi-list toggle-sidebar-btn" src="{{ asset('img/logo.png') }}" alt="">
            </a>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="navbar-nav me-auto">
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="text-start pe-5 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                @if ( Auth::user()->role == 0)

                <a class="nav-link " href="{{ route('admin.home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>

                @else
                    
                <a class="nav-link " href="{{ route('home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>

                @endif
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-people"></i><span>Siswa</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    {{-- <li>
                        <a href="{{ route('student.create') }}">
                            <i class="bi bi-circle"></i><span>Create</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('student.list') }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Teacher</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('teacher.create') }}">
                            <i class="bi bi-circle"></i><span>Create</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('teacher.list') }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav --> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-house"></i><span>Kelas</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('classroom.create') }}">
                            <i class="bi bi-circle"></i><span>Buat</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('classroom.list') }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-book"></i><span>Subject</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('subject.create') }}">
                            <i class="bi bi-circle"></i><span>Create</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('subject.list') }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->
             --}}
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#schedule-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar"></i><span>Schedule</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="schedule-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('schedule.create') }}">
                            <i class="bi bi-circle"></i><span>Create</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('schedule.list') }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav --> --}}

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <section class="section dashboard">
            @yield('content')
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        
        <div class="container my-3">
            
            <div class="row">
                
                <div class="col-md-3">
                    <img class="img-fluid w-50 mx-auto d-block" src="{{ asset('img/logo.png') }}" alt="">
                </div>
                
                <div class="col-md-9">
                    <h6 class="fw-bold">MIS AL KHOIRIYAH SAWANGAN</h6>
                    <div class="row mt-2">
                        <div class="col-sm-3">
                            <p>
                                NSM
                                <br>
                                111232760032
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                NPSN
                                <br>
                                60710012
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                STATUS MADRASAH
                                <br>
                                Swasta
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                KATEGORI MADRASAH
                                <br>
                                Madrasah Reguler
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p>
                        ALAMAT
                        <br>
                        Jl. Raya Mukhtar Km. 3 Rt. 02/02. Rt. 2 Rw. 2
                        <br>
                        Kel. SAWANGAN. Kec. SAWANGAN
                        <br>
                        KOTA DEPOK JAWA BARAT 16511
                    </p>
                </div>

            </div>

        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
