<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;

class StudentController extends Controller
{
    public function add()
    {        
        return view('add');
    }

    public function addSub(Request $req)
    {   
        $stAdd = new Student(); 
        $stAdd-> name = $req->name;
        $stAdd-> age = $req->age;
        $stAdd-> city = $req->city;
        $stAdd-> country = $req->country;
        $stAdd-> save();                
        $students = Student::all();
        return view('show', compact('students'));
    }
    
    public function del($id)
    {       
        // $student = Student::where('id', $id)->first();
        // return view('delete', compact('student'));
        // $stDelete = Student::find($id);
        $student = Student::where('id', $id)->delete();
        // dd($student);
        $students = Student::all();
        // return redirect('show', compact('students'));
        return view('show', compact('students'));
    }
    
    public function delete($id)
    {       
        $student = Student::where('id', $id)->first();
        return view('delete', compact('student'));
    }
    
    public function deleteSub(Request $req)
    {       
        $student = Student::find($req->id);
        if($req->age==$student->age)
        {
            $student = Student::where('id', $req->id)->delete();
            $students = Student::all();
            // return redirect('show', compact('students'));
            return view('show', compact('students'));
        }
        else
        {
            Session::flash('message', 'You entered wrong input! Submit correct age.'); 
            $student = Student::where('id', $req->id)->first();
            return view('delete', compact('student'));
        }
        
    }

    public function edit($id)
    {       
        // $stEdit = Student::where('id', $req->id)->first();
        $stEdit = Student::find($id);
        return view('edit', compact('stEdit'));
    }

    public function editSub(Request $req)
    {   
        $stEdit = Student::where('id', $req->id)->first();
        $stEdit -> name = $req -> name;
        $stEdit -> age = $req -> age;
        $stEdit -> city = $req -> city;
        $stEdit -> country = $req -> country;
        $stEdit -> save();                
        $students = Student::all();
        // return redirect('show', compact('students'));
        return view('show', compact('students'));
    }

    public function show() 
    {
        $students = Student::all();
        return view('show', compact('students'));
    }

}
