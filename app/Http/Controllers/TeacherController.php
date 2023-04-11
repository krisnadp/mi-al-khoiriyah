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

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('code', 'asc')->paginate(10);
        return view('teacher.list', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderBy('name', 'asc')->paginate(1000);
        return view('teacher.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacherCount = Teacher::all()->count();
        $teacher = new Teacher;
        $teacher->subject_id = $request->subject_id;
        $teacher->code = $request->start_year . $teacherCount + 1;
        $teacher->name = $request->name;
        $teacher->start_year = $request->start_year;
        $teacher->save();
        return redirect( route('teacher.list') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teacher.profile', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $subjects = Subject::orderBy('name', 'asc')->paginate(1000);
        return view('teacher.edit', compact('teacher', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        Teacher::where('id', $teacher->id)
            ->update([
        'subject_id' => $request->subject_id,
        'name' => $request->name,
        'start_year' => $request->start_year,
        ]);
        $teacher->update($request->all());
        return redirect( route('teacher.list') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher = Teacher::where('id', $teacher->id)->delete();
        return redirect( route('teacher.list') );
    }
}
