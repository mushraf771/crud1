<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student1;
class OrmController extends Controller
{
    function show(Request $request){
        $student = new student1;
        // $student = student1::find(1);
        // $student->delete();
        $student->name = 'King Mad Khan';
        $student->email = 'a@a.com';
        $student->city = 'Nishtar Lahore ';
        $student->marks = '900';
        $student -> save();
        $students = student1::all();
        return view('orm',['students'=>$students]);
    }
}
