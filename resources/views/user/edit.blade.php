@extends('layout.layout')
@section('title')
    <title> Edite User </title>
@endsection
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card m-2 ">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">
                                        <i class="uil uil-focus-add"></i>
                                        Edite User
                                    </h3>
                                </div>
                                <div class="col text-right">
                                    <ol class="breadcrumb float-sm-right p-0 title">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                        <li class="breadcrumb-item active"><a
                                                href="{{route('user.index')}}">All
                                                Students</a></li>
                                        <li class="breadcrumb-item active"> New User</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <form method="post" action="{{route('user.action_edit', $edit_student->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label for="formGroupExampleInput">User Name</label>
                                        <input type="text" class="form-control" name="student" placeholder="Student name"  value="{{$edit_user->name}}">
                                        @if($errors->any())
                                            <ul class="help-block text-danger mt-2">
                                                <li> {{$errors->first('users')}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">User Password</label>
                                        <input type="text" class="form-control" name="student" placeholder="Student name"  value="{{$edit_user->pass}}">
                                        @if($errors->any())
                                            <ul class="help-block text-danger mt-2">
                                                <li> {{$errors->first('users')}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">User Name</label>
                                        <input type="text" class="form-control" name="student" placeholder="Student name"  value="{{$edit_email->email}}">
                                        @if($errors->any())
                                            <ul class="help-block text-danger mt-2">
                                                <li> {{$errors->first('users')}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="my-auto text-center p-2">
                                    <button type="submit" class="btn btn-primary w-50 ">Edit student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
