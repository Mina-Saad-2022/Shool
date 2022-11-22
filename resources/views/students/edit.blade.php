@extends('layout.layout')
@section('title')
    <title>  {{ __('auth.edit_student') }}  </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.edit_student') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a href="{{route('student.index')}}">{{ __('auth.all_students') }}</a>
    </li>
    <li class="breadcrumb-item active"> {{ __('auth.edit_student') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')

    <form method="post" action="{{route('student.action_edit', $edit_student->id)}}">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.edit_student') }}</legend>
        @csrf
        <div class="row">
            <div class="col">
                <label for="formGroupExampleInput">{{ __('auth.student_name') }}</label>
                <input type="text" class="form-control" name="student" placeholder="{{ __('auth.student_name') }}"  value="{{$edit_student->name}}">
                @if($errors->any())
                    <ul class="help-block text-danger mt-2">
                        <li> {{$errors->first('students')}}</li>
                    </ul>
                @endif
            </div>
        </div>
        <div class="my-auto text-center p-2">
            <button type="submit" class="btn btn-primary w-50 ">{{ __('auth.edit_student') }}</button>
        </div>
        </fieldset>
    </form>

@endsection
