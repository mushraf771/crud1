<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    function show(Request $request){
        $student = DB::select('select * from students');
        return view('home',['student'=>$student]);
    }
    function create(Request $request){
        // dd($request->name);
        DB::table('students')->insert([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        // dd($request->name);
        return redirect(route('index'))->with('status','student added successfully');
    }
    function edit($id){
        $student = DB::table('students')->find($id);
        return view('edit',['student'=>$student]);
    }
    function update(Request $request,$id){
        // dd($request->name);
        // DB::table('users')->update()
        DB::table('students')->where('id', $id)->update([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        // dd($request->name);
        return redirect(route('index'))->with('status','student updated successfully');
    }
    function delete($id){
       DB::table('students')->where('id',$id)->delete();
       return redirect(route('index'))->with('status','student Deleted successfully');
    }
}
