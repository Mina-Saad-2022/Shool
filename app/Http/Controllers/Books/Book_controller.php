<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Book_controller extends Controller

{

    /********************************************** for show all books **********************************************/


    public function index()
    {
        $BOOKS = Book::all();
        if (Session::has("edit")) {
            toast('Success edit book', 'success');
        } elseif (Session::has("create")) {
            toast('Success create new book', 'success');
        } elseif (Session::has("delete")) {
            toast('Success delete book', 'success');
        }
        return view('books.index', compact('BOOKS'));

    }

    public function action_create(Request $request)
    {
        $data = $request->only([
            'title',
            'description',
            'image'
        ]);

        $rules = [
            'title' => 'required|max:5',
            'description' => 'required',
//            'image' => 'required|image|mimes:jpg'
        ];

        $messages = [
            'title.required' => 'Title is required',
            'title.max' => 'Title shouldn.t exceed 5 characters',
            'description.required' => 'description is required',
            'image.required' => 'Image is required',
//            'image.image' => 'this file must be image',
//            'image.mimes' => 'this image must be jpg',

        ];

        /* for change name image &B move image in folder update in public  */

        if ($request->hasFile('image')) {

            /* 1. save image in variable */

            $image = $request->file('image');

            /* 2. save extension image in variable */

            $extension = $image->getClientOriginalExtension();

            /* 3. change name image & save the new name in same extension */

            $change_name = "book-" . uniqid() . ".$extension";

            /* 4. move image in new folder */

            $image->move(public_path('update/books'), $change_name);


            $validated = Validator::make($data, $rules, $messages);
            if ($validated->fails()) {
                return redirect()->route('book.create')->with(['errors' => $validated->errors()]);
            }


            Book::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $change_name,

            ]);
        }

        return redirect(route('book.index'))->with(["create" => ["Title", "body text"]]);
    }

    /**************************************** to insert new book in database ****************************************/

    public function create()
    {
        return view('books.create');
    }

    /**************************************** to edit book in database ****************************************/


    public function edit($id)
    {
        $edit_book = Book::findOrFail($id);
        return view('books.edit', compact('edit_book'));
    }

    public function action_edit(Request $request, $id)
    {
        $book_findorfail = Book::findOrFail($id);
        $change_name = $book_findorfail->image;

        if ($request->hasFile('image')) {

            if ($change_name !== null) {
                unlink(public_path('update/books/' . $change_name));
            }

            else {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $change_name = "book-" . uniqid() . ".$extension";
                $image->move(public_path('update/books'), $change_name);
            }

        }


        $book_findorfail->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $change_name,
        ]);

        return redirect(route('book.index'))->with(["edit" => ["Title", "body text"]]);
    }

    /**************************************** to delete teacher in database ****************************************/

    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        return redirect(route('book.index'))->with(["delete" => ["Title", "body text"]]);

    }


}
