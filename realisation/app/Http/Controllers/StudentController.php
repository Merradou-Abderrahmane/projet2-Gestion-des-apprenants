<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();

        return view('student.index', ['students' => $students]);

    }

    public function create()
    {
        return view('student.addStudent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $student = new Student([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        ]);
        $student->save();
        return redirect('/students')->with('success', 'Student has been added');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $student = Student::find($id);
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->phone = $request->get('phone');
        $student->save();

        return redirect('/students')->with('success', 'Student has been updated');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student has been deleted Successfully');
    }


}
