<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /********************************************** for show all admins **********************************************/


    public
    function index()
    {
        $users = User::all();
        if (Session::has("edit")) {
            toast('Success edit user', 'success');
        } elseif (Session::has("create")) {
            toast('Success create new user', 'success');
        } elseif (Session::has("delete")) {
            toast('Success delete user', 'success');
        }
        return view('user.index', compact('users'));

    }

    public function profile()
    {
        return view('user.profile');
    }

    /**************************************** to insert new user in database ****************************************/

    public
    function create()
    {
        return view('user.create');
    }

    public function action_create(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
            'age',
            'phone',
        ]);

        $rules = [
            'name' => 'required|max:25',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'phone' => 'required',
        ];

        $messages = [
            'name.required' => 'Title is required',
            'name.max' => 'Title shouldn.t exceed 5 characters',
            'email.required' => 'description is required',
            'password.required' => 'password is required',
            'age.required' => 'age is required',
            'phone.required' => 'phone is required',

        ];


        if ($request->hasFile('image')) {

            /* 1. save image in variable */

            $image = $request->file('image');

            /* 2. save extension image in variable */

            $extension = $image->getClientOriginalExtension();

            /* 3. change name image & save the new name in same extension */

            $change_name = "user-" . uniqid() . ".$extension";

            /* 4. move image in new folder */

            $image->move(public_path('update/users'), $change_name);


            $validated = Validator::make($data, $rules, $messages);

            if ($validated->fails()) {

                return redirect()->route('user.create')->with(['errors' => $validated->errors()]);
            }

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Crypt::encrypt($request['password']),
                'image' => $change_name,
                'age' => $request->age,
                'phone' => $request->phone,
                'gender' => $request->gender,
            ]);

            return redirect(route('user.index'))->with(["create" => ["Title", "body text"]]);

        }

        else{
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Crypt::encrypt($request['password']),
                'age' => $request->age,
                'phone' => $request->phone,
                'gender' => $request->gender,
            ]);
        }
        return redirect(route('user.index'))->with(["create" => ["Title", "body text"]]);

    }


    /**************************************** to edit user in database ****************************************/


    public
    function edit($id)
    {

        $edit_user = User::findOrFail($id);
        return view('user.edit', compact('edit_user'));
    }

    public function action_edit(Request $request, $id)
    {


        $user_findorfail = User::findOrFail($id);
        $change_name = $user_findorfail->image;

        if ($request->hasFile('image')) {

            if ($change_name !== null) {
                unlink(public_path('update/users/' . $change_name));
            } else {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $change_name = "user-" . uniqid() . ".$extension";
                $image->move(public_path('update/users'), $change_name);
            }

        }


        $user_findorfail->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Crypt::encrypt($request['password']),
            'image' => $change_name,
            'age' => $request->age,
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);

        return redirect(route('user.index'))->with(["edit" => ["Title", "body text"]]);
    }

    /**************************************** to delete teacher in database ****************************************/

    public
    function delete($id)
    {

        User::findOrFail($id)->delete();

        return redirect(route('user.index'))->with(["delete" => ["Title", "body text"]]);


    }




}
