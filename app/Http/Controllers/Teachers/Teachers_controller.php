<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class Teachers_controller extends Controller
{

    /********************************************** for show all teachers **********************************************/

    public function index()
    {
        $teachers = Teacher::all();

        if (Session::has("edit")) {
            toast('Success edit teacher', 'success');
        } elseif (Session::has("create")) {
            toast('Success create new teacher', 'success');
        } elseif (Session::has("delete")) {
            toast('Success delete teacher', 'success');
        }

        return view('teachers.index', compact('teachers'));

    }

    /**************************************** to insert new teacher in database ****************************************/

    public function create()
    {
        $subjects = Section::all();
        return view('teachers.create', compact('subjects'));

    }


    public function action_create(Request $request)

    {
        $data = $request->only([
            'name',
            'subject',
            'date',
            'phone',
            'age',
            'address',
            'image',

        ]);
        $rules = [
            'name' => 'required|max:15',
            'subject' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'phone' => 'required|numeric|gt:0',
            'age' =>'required |',
            'address' =>'required |string|max:255 | min:2',
//            'image' =>'required ||image',

        ];
        $message = [
            'name.required' => "Teacher name is required ",
            'name.max' => 'Title shouldn.t exceed 15 characters',
            'date.required' => "Date of being hired is required ",
            'subject.required' => "Specialization is required ",

        ];

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $extension = $image->getClientOriginalExtension();

            $change_name = "teacher-" . uniqid() . ".$extension";

            $image->move(public_path('update/teachers'), $change_name);

            $validated = Validator::make($data, $rules, $message);

            if ($validated->fails()) {
                return redirect()->route('teacher.create')->with([
                    'errors' => $validated->errors()
                ]);

            }

            $teacher = Teacher::create([
                'name' => $request->name,
                'subject' => $request->subject,
                'date' => $request->date,
                'phone'=> $request-> phone,
                'age'=> $request-> age,
                'address'=> $request-> address ,
                'image'=>  $change_name,
                'gender'=> $request-> gender,
            ]);

            $teacher->sections()->syncWithoutDetaching($request->subject);
        }

        return redirect(route('teacher.index'))->with(["create" => ["Title", "body text"]]);
    }


    /**************************************** to edit teacher in database ****************************************/


    public function edit($id)
    {
        $edit_teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('edit_teacher'));
    }


    public function action_edit(Request $request, $id)
    {

        Teacher::findOrFail($id)->update([
            'name' => $request->name,
            'subject' => $request->subject,
            'date' => $request->date
        ]);
        return redirect(route('teacher.index'))->with(["edit" => ["Title", "body text"]]);
    }

    /**************************************** to delete teacher in database ****************************************/

    public function delete($id)
    {
        Teacher::findOrFail($id)->delete();

        return redirect(route('teacher.index'))->with(["delete" => ["Title", "body text"]]);

    }



}
