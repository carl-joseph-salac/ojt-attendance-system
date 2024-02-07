<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(){
        $attendances = Attendance::all();
        return view('index', ['attendances' => $attendances]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'time_in' => 'required',
            'break_out' => 'required',
            'break_in' => 'required',
            'time_out' => 'required',
        ]);

        $newAttendance = Attendance::create($data);

        return redirect(route('attendance.index'))->with('success', '! Attendance Created Successfully');
    }

    public function edit(Attendance $attendance){
        return view('edit', ['attendance'=>$attendance]);
    }

    public function update(Attendance $attendance, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'time_in' => 'required',
            'break_out' => 'required',
            'break_in' => 'required',
            'time_out' => 'required',
        ]);

        $attendance->update($data);

        return redirect(route('attendance.index'))->with('success', '! Attendance Updated Successfully');
    }

    public function destroy(Attendance $attendance){
        $attendance->delete();

        return redirect(route('attendance.index'))->with('success', '! Attendance Deleted Successfully');
    }

}
