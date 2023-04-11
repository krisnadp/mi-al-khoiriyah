<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Carbon\Carbon;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::orderBy('code', 'asc')->paginate(15);
        return view('classroom.list', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classroom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classroom = new Classroom;

        $classroom->code = $request->grade . $request->name;
        $classroom->name = $request->name;
        $classroom->grade = $request->grade;
        $classroom->save();
        return redirect( route('classroom.list') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        $schedule = Schedule::where('classroom_id', $classroom->id)->first();
        return view('classroom.profile', compact('classroom', 'schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('classroom.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $classroomCount = Classroom::all()->count();
        if ($request->grade == 'K') {
            Classroom::where('id', $classroom->id)
            ->update([
                'code' => '1' . $request->grade . $request->class . $classroomCount + 1
            ]);
        } elseif ($request->grade == 'ES') {
            Classroom::where('id', $classroom->id)
            ->update([
                'code' => '2' . $request->grade . $request->class . $classroomCount + 1
            ]);
        } elseif ($request->grade == 'MS') {
            Classroom::where('id', $classroom->id)
            ->update([
                'code' => '3' . $request->grade . $request->class . $classroomCount + 1
            ]);
        } elseif ($request->grade == 'HS') {
            Classroom::where('id', $classroom->id)
            ->update([
                'code' => '4' . $request->grade . $request->class . $classroomCount + 1
            ]);
        }
        Classroom::where('id', $classroom->id)
            ->update([
        'teacher_id' => $request->teacher_id,
        'name' =>$request->grade . '-0' . $request->class,
        'grade' => $request->grade,
        'class' => $request->class,
        ]);
        $classroom->update($request->all());
        return redirect( route('classroom.list') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom = Classroom::where('id', $classroom->id)->delete();
        return redirect( route('classroom.list') );
    }
}
