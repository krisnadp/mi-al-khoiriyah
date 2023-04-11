<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Subject;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $studentCount = Student::all()->count();
        $classroomCount = Classroom::all()->count();
        $teacherCount = Teacher::all()->count();
        $subjectCount = Subject::all()->count();
        return view('home', compact('studentCount', 'classroomCount', 'teacherCount', 'subjectCount'));
    }

    public function adminHome()
    {
        $studentCount = Student::all()->count();
        $classroomCount = Classroom::all()->count();
        $teacherCount = Teacher::all()->count();
        $subjectCount = Subject::all()->count();
        return view('adminHome', compact('studentCount', 'classroomCount', 'teacherCount', 'subjectCount'));
    }
}
