<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            'name' => 'required|String',
            'time_in' => 'required',
            'break_out' => 'required',
            'break_in' => 'required',
            'time_out' => 'required',
        ]);

        $newAttendance = Attendance::create($data);

        return redirect(route('home'))->with('created', '');
    }

    public function edit(Attendance $attendance){
        return view('edit',compact('attendance'));
    }

    public function update(Attendance $attendance, Request $request){
        $data = $request->validate([
            'name' => 'required|String',
            'time_in' => 'required',
            'break_out' => 'required',
            'break_in' => 'required',
            'time_out' => 'required',
        ]);

        $attendance->update($data);

        return redirect(route('home'))->with('updated', '');
    }

    public function destroy(Attendance $attendance){
        $attendance->delete();

        return redirect(route('home'))->with('deleted', '');
    }

}
