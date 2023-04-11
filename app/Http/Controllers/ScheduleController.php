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
use App\Models\Schedule;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::orderBy('id', 'asc')->paginate(10);
        return view('schedule.list', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::orderBy('name', 'asc')->paginate(1000);
        $subjects = Subject::orderBy('name', 'asc')->paginate(1000);
        return view('schedule.create', compact('subjects', 'classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule;
        $schedule->classroom_id = $request->classroom_id;
        $schedule->mon = $request->mon_1 . ' ' . $request->mon_2 . ' ' . $request->mon_3 . ' ' . $request->mon_4 . ' ' . $request->mon_5 . ' ' . $request->mon_6;
        $schedule->tue = $request->tue_1 . ' ' . $request->tue_2 . ' ' . $request->tue_3 . ' ' . $request->tue_4 . ' ' . $request->tue_5 . ' ' . $request->tue_6;
        $schedule->wed = $request->wed_1 . ' ' . $request->wed_2 . ' ' . $request->wed_3 . ' ' . $request->wed_4 . ' ' . $request->wed_5 . ' ' . $request->wed_6;
        $schedule->thu = $request->thu_1 . ' ' . $request->thu_2 . ' ' . $request->thu_3 . ' ' . $request->thu_4 . ' ' . $request->thu_5 . ' ' . $request->thu_6;
        $schedule->fri = $request->fri_1 . ' ' . $request->fri_2 . ' ' . $request->fri_3 . ' ' . $request->fri_4 . ' ' . $request->fri_5 . ' ' . $request->fri_6;
        $schedule->save();
        return redirect( route('schedule.list') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $classrooms = Classroom::orderBy('name', 'asc')->paginate(1000);
        $subjects = Subject::orderBy('name', 'asc')->paginate(1000);
        return view('schedule.edit', compact('schedule', 'subjects', 'classrooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        Schedule::where('id', $schedule->id)
            ->update([
        'mon' => $request->mon_1 . ' ' . $request->mon_2 . ' ' . $request->mon_3 . ' ' . $request->mon_4 . ' ' . $request->mon_5 . ' ' . $request->mon_6,
        'tue' => $request->tue_1 . ' ' . $request->tue_2 . ' ' . $request->tue_3 . ' ' . $request->tue_4 . ' ' . $request->tue_5 . ' ' . $request->tue_6,
        'wed' => $request->wed_1 . ' ' . $request->wed_2 . ' ' . $request->wed_3 . ' ' . $request->wed_4 . ' ' . $request->wed_5 . ' ' . $request->wed_6,
        'thu' => $request->thu_1 . ' ' . $request->thu_2 . ' ' . $request->thu_3 . ' ' . $request->thu_4 . ' ' . $request->thu_5 . ' ' . $request->thu_6,
        'fri' => $request->fri_1 . ' ' . $request->fri_2 . ' ' . $request->fri_3 . ' ' . $request->fri_4 . ' ' . $request->fri_5 . ' ' . $request->fri_6,
        ]);
        $schedule->update($request->all());
        return redirect( route('schedule.list') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule = Schedule::where('id', $schedule->id)->delete();
        return redirect( route('schedule.list') );
    }
}
