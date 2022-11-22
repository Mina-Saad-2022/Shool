@extends('layout.layout')
@section('title')
    <title> {{ __('auth.new_student') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.new_student') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active"><a
            href="{{route('student.index')}}">{{ __('auth.all_students') }}</a>
    </li>
    <li class="breadcrumb-item active"> {{ __('auth.new_student') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')

    <form method="post" action="{{route('student.create')}}">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.new_student') }}</legend>
            @csrf
            <div class="row">

                {{------------- student name -------------}}

                <div class="col-3 p-3">
                    <label for="formGroupExampleInput">{{ __('auth.student_name') }}</label>
                    <input type="text" class="form-control" name="name"
                           placeholder="{{ __('auth.name_student_holder') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('name')}}</li>
                        </ul>
                    @endif
                </div>

                {{------------- student age -------------}}


                <div class="col-3 p-3">
                    <label for="formGroupExampleInput">{{ __('auth.student_age') }}</label>
                    <input type="number" min="8" max="15" class="form-control" name="age"
                           placeholder="{{ __('auth.age_student_holder') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('age')}}</li>
                        </ul>
                    @endif
                </div>

                {{------------- student class -------------}}

                <div class="col-3 p-3">
                    <label for="formGroupExampleInput">{{ __('auth.student_class') }}</label>
                    <input type="text" class="form-control" name="class"
                           placeholder="{{ __('auth.class_student_holder') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('class')}}</li>
                    @endif
                </div>

                {{------------- student gender -------------}}

                <div class="col-3 p-3 ">
                    <label for="formGroupExampleInput">{{ __('auth.student_gender') }}</label>
                    <div class="container m-2">
                        <div class="row">
                            <div class="col-4">
                                <input class="form-check-input" type="radio"
                                       name="gender" id="flexRadioDefault1" value="0">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ __('auth.female') }}
                                </label>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                           name="gender" id="flexRadioDefault1" value="1"
                                           checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        {{ __('auth.male') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
            <div class="my-auto text-center p-2">
                <button type="submit"
                        class="btn btn-primary w-50 ">{{ __('auth.student_add') }}</button>
            </div>
        </fieldset>
    </form>

@endsection
