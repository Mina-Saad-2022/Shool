<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class StudentController extends Controller
{
    public function index()
    {
        $Students = Student::all();
        if (Student::with("success")) {
            toast('Success edit Student', 'success');
        } elseif (Session::has("create")) {
            toast('Success create new Student', 'success');
        } elseif (Session::has("delete")) {
            toast('Success delete Student', 'success');
        }
        return view('students.index', compact('Students'));
    }


    /**************************************** to insert new Session in database ****************************************/

    public function create()
    {
        return view('students.create');
    }

    public function action_create(Request $request)
    {
        $data = $request->only([
            'name',
            'age',
            'gender',
            'class'

        ]);

        $rules = [
            'name' => 'required|max:15',
             'age'=>'required',
            'class'=>'required',
//            'gender'=> 'required',
        ];

        $message = [
            'name.required' => 'student name is required',
            'name.max' => 'student name should only be 15 letters',
            'age.required' => 'student age is required',
            'class.required' => 'student class is required',
        ];


        $validated = Validator::make($data, $rules, $message);

        if ($validated->fails()) {
            return redirect()->route('student.create')->with(['errors' => $validated->errors()]);

        }

//        $create_student = new Student() ;
//
//        $create_student->name = $request->input('name');
//        $create_student->age = $request->Input('age');
//        $create_student->gender =$request->Input('gender');
//        $create_student->class = $request->Input('class');
//        $create_student->save();



        Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'class' => $request->class,


        ]);


        return redirect(route('student.index'))->with(["create" => ["Student", "body text"]]);
    }


    /**************************************** to edit Session in database ****************************************/


    public function edit($id)
    {
        $edit_student = Student::findOrFail($id);
        return view('students.edit', compact('edit_student'));

    }

    public function action_edit(Request $request, $id)
    {

        Student::findOrFail($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'class' => $request->class,
        ]);

        return redirect(route('student.index'))->with(["success" => ["Title", "body text"]]);
    }

    /**************************************** to delete teacher in database ****************************************/

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return redirect(route('student.index'))->with(["delete" => ["Title", "body text"]]);

    }
}
