<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    // public function index()
    // {
    //     $students = Student::all();

    //     return view('student.index', ['students' => $students]);

    // }

    public function create($id)
    {
        return view('student.addStudent', ['id' => $id]);
    }

    public function store(Request $request)
    {
        
        $student = new Student([
            'firstName' => $request->input('first_name'),
            'lastName' => $request->input('last_name'),
            'email' => $request->input('email'),
            'promotionId' => $request->input('id')

        ]);
        $student->save();
        return redirect('/edit' . "/" . $request->id);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.editStudent', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        // ]);
        $student = Student::find($id);
        $student->firstName = $request->get('first_name');
        $student->lastName = $request->get('last_name');
        $student->email = $request->get('email');
        
        $student->save();

        return redirect('/edit' . "/" . $student->promotionId);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        // redirect back to the same page
        return redirect()->back();
    }

    public function search(Request $request)
    {
    if($request->ajax()){
        $input = $request->key;
    $output="";
    $student=Student::where('firstName','like','%'.$input."%")
        // ->orWhere('lastName','like','%'.$input."%")
        // ->orWhere('email','like','%'.$input."%")
    ->get();
    // if($promotion)
    {
    foreach ($student as $student) {
    $output.='<tr>
    <td>'.$student->firstName.'</td>
    <td>
    <a href="/student/edit/'.$student->id.'" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
    <a href="/student/delete/'.$student->id.'" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
    <td>
    </tr>';
    }
    return Response($output);
       }
       }
    }

}