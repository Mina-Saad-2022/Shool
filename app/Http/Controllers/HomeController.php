<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }


    public function count()
    {
        $countSection = Section::count();
        $countTeacher = Teacher::count();
        $countBook = Book::count();
        $countStudent = Student::count();
        $countUser = User::count();
        return view('admin', compact(['countSection', 'countTeacher', 'countBook','countStudent','countUser']));
    }

}
