<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SectionController extends Controller
{

    public function index()
    {
        $sections = Section::all();
        if (Session::has("edit")) {
            toast('Success edit Session', 'success');
        } elseif (Session::has("create")) {
            toast('Success create new Session', 'success');
        } elseif (Session::has("delete")) {
            toast('Success delete Session', 'success');
        }
        return view('section.index', compact('sections'));

    }

    public function action_create(Request $request)
    {
        $data = $request->only([
            'sections',
        ]);

        $rules = [
            'sections' => 'required|max:15|unique:sections'
        ];

        $message = [
            'sections.required' => 'Session is required',
            'sections.max' => 'Session should only be 15 letters',
            'sections.unique' => 'Session is Existing',
        ];

        $validated = Validator::make($data, $rules, $message);

        if ($validated->fails()) {

            return redirect()->route('section.create')->with([
                'errors' => $validated->errors()
            ]);
        }

        Section::create([
            'sections' => $request->sections,
        ]);


        return redirect(route('section.index'))->with(["create" => ["Session", "body text"]]);
    }

    /**************************************** to insert new Session in database ****************************************/

    public function create()
    {
        return view('section.create');
    }

    /**************************************** to edit Session in database ****************************************/


    public function edit($id)
    {
        $edit_section = Section::findOrFail($id);
        return view('section.edit', compact('edit_section'));

    }

    public function action_edit(Request $request, $id)
    {
        Section::findOrFail($id)->update([
            'sections' => $request->sections,
        ]);

        return redirect(route('section.index'))->with(["edit" => ["Title", "body text"]]);
    }

    /**************************************** to delete teacher in database ****************************************/

    public function delete($id)
    {
        Section::findOrFail($id)->delete();
        return redirect(route('section.index'))->with(["delete" => ["Title", "body text"]]);
    }

    /**************************************** to relationship ****************************************/

    public function Books()
    {
        return $this->belongsToMany('App\Models\Book');
    }

}
