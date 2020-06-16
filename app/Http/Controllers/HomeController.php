<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class HomeController extends Controller
{
    public function index() {

        // obtain records by table
        $students = Student::all();

        // WHERE
        // $students = Student::where('id', 1)->get();

        // $students = Student::where('description', '!=', '')->get();
        // $students = Student::where('id', '<>', 3)
        //     ->orderBy('name','asc')
        //     ->limit(2)
        //     ->get();

        // FIRST
        // $students = Student::where('id', '<>', 3)->first();
        // dd($students->name);
        // $students[] = Student::where('id', '<>', 3)->first();

        // FIND
        // $students[] = Student::find(2);
        
        
        return view('index', compact('students'));
    }
}
