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

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('code', 'asc')->paginate(10);
        return view('subject.list', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new Subject;
        if ($request->grade == 'K') {
            $subject->code =  '1' . $request->grade . '0' . $request->class;
        } elseif ($request->grade == 'ES') {
            $subject->code =  '2' . $request->grade . '0' . $request->class;
        } elseif ($request->grade == 'MS') {
            $subject->code =  '3' . $request->grade . '0' . $request->class;
        } elseif ($request->grade == 'HS') {
            $subject->code =  '4' . $request->grade . '0' . $request->class;
        }
        $subject->name = $request->name;
        $subject->grade = $request->grade;
        $subject->class = $request->class;
        $subject->save();
        return redirect( route('subject.list') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $teachers = Teacher::where('subject_id', $subject->id)->get();
        return view('subject.profile', compact('subject', 'teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        if ($request->grade == 'K') {
            Subject::where('id', $subject->id)
            ->update([
                'code' => '1' . $request->grade . '0' . $request->class
            ]);
        } elseif ($request->grade == 'ES') {
            Subject::where('id', $subject->id)
            ->update([
                'code' => '2' . $request->grade . '0' . $request->class
            ]);
        } elseif ($request->grade == 'MS') {
            Subject::where('id', $subject->id)
            ->update([
                'code' => '3' . $request->grade . '0' . $request->class
            ]);
        } elseif ($request->grade == 'HS') {
            Subject::where('id', $subject->id)
            ->update([
                'code' => '4' . $request->grade . '0' . $request->class
            ]);
        }
        Subject::where('id', $subject->id)
            ->update([
        'name' =>$request->grade . '-0' . $request->class,
        'grade' => $request->grade,
        'class' => $request->class,
        ]);
        $subject->update($request->all());
        return redirect( route('subject.list') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject = Subject::where('id', $subject->id)->delete();
        return redirect( route('subject.list') );
    }
}
