<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    public function index(){
        $user = DB::table('attendances')->paginate(5);
        return view('home2', compact('user'));
    }
    public function viewCreatePage(Request $req){
        return view('create2');
    }

    public function SaveAttendance(Request $req){
        $data = $req->validate([
            'name' => 'required|String',
            'time_in' => 'required',
            'break_out' => 'required',
            'break_in' => 'required',
            'time_out' => 'required',
        ]);

        DB::table('attendances')->insert([
            'name' => $req->input('name'),
            'time_in' => $req->input('name'),
            'break_out' => $req->input('break_out'),
            'break_in' => $req->input('break_in'),
            'time_out' => $req->input('time_out'),
        ]);

        return redirect(url('/home'));
    }

    public function delete(Request $req){
        DB::table('attendances')->where('id', $req->get('deleteid'))->delete();
        return redirect(url('/home'))->with('deleted', 'One Record has been deleted');
    }
}
