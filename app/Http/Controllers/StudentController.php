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
use App\Models\User;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('id', 'asc')->paginate(25);
        return view('student.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::all();
        return view('student.create', compact('classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentCount = Student::all()->count();
        $student = new Student;
        if ($request->grade == 'K') {
            $student->code =  '1' . $request->class . $request->start_year . $studentCount + 1;
        } elseif ($request->grade == 'ES') {
            $student->code =  '2' . $request->class . $request->start_year . $studentCount + 1;
        } elseif ($request->grade == 'MS') {
            $student->code =  '3' . $request->class . $request->start_year . $studentCount + 1;
        } elseif ($request->grade == 'HS') {
            $student->code =  '4' . $request->class . $request->start_year . $studentCount + 1;
        }
        $student->classroom_id = $request->classroom_id;
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->class = $request->class;
        $student->start_year = $request->start_year;
        $student->end_year = $request->end_year;
        $student->save();
        return redirect( route('student.list') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        return view('student.profile', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $classrooms = Classroom::all();
        return view('student.edit', compact('student', 'classrooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $studentCount = Student::all()->count();
        if ($request->grade == 'K') {
            Student::where('id', $student->id)
            ->update([
                'code' => '1' . $request->class . $request->start_year . $studentCount + 1
            ]);
        } elseif ($request->grade == 'ES') {
            Student::where('id', $student->id)
            ->update([
                'code' => '2' . $request->class . $request->start_year . $studentCount + 1
            ]);
        } elseif ($request->grade == 'MS') {
            Student::where('id', $student->id)
            ->update([
                'code' => '3' . $request->class . $request->start_year . $studentCount + 1
            ]);
        } elseif ($request->grade == 'HS') {
            Student::where('id', $student->id)
            ->update([
                'code' => '4' . $request->class . $request->start_year . $studentCount + 1
            ]);
        }
        Student::where('id', $student->id)
            ->update([
        'classroom_id' => $request->classroom_id,
        'name' => $request->name,
        'grade' => $request->grade,
        'class' => $request->class,
        'start_year' => $request->start_year,
        'end_year' => $request->end_year
        ]);
        $student->update($request->all());
        return redirect( route('student.list') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student = Student::where('id', $student->id)->delete();
        return redirect( route('student.list') );
    }
}
