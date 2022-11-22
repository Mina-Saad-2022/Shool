@extends('layout.layout')
@section('title')
    <title> {{ __('auth.new_teacher') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.new_teacher') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a href="{{route('teacher.index')}}">{{ __('auth.all_teachers') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('auth.new_teacher') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

    <form method="post" action="{{route('teacher.action_create')}}" enctype="multipart/form-data">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.new_teacher') }}</legend>
            @csrf
            <div class="row p-1">
                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.teacher_name') }} :</label>
                    <input type="text" class="form-control" name="name"
                           placeholder="{{ __('auth.teacher_name_holder') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('name')}}</li>
                        </ul>
                    @endif
                </div>
                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.section') }} :</label>
                    <select name='subject' class="form-control form-select form-select-sm"
                            aria-label=".form-select-sm example">
                        @foreach($subjects as $Section)
                            <option value="{{$Section->id}}">{{$Section->sections}}</option>
                        @endforeach

                    </select>
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('subject')}}</li>
                        </ul>
                    @endif
                </div>
            </div>
            <div class="row p-1">
                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.date_of_hiring') }}</label>
                    <input type="date" class="form-control" name="date"
                           placeholder="Date of hiring">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('date')}}</li>
                        </ul>
                    @endif
                </div>


                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.age') }} :</label>
                    <input type="number" class="form-control" name="age"
                           placeholder="{{ __('auth.age') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('age')}}</li>
                        </ul>
                    @endif
                </div>
            </div>

            <div class="row p-1">
                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.phone') }} :</label>
                    <input type="text" class="form-control" name="phone"
                           placeholder="{{ __('auth.phone') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('phone')}}</li>
                        </ul>
                    @endif
                </div>
                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.address') }} :</label>
                    <input type="text" class="form-control" name="address"
                           placeholder="{{ __('auth.address') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('address')}}</li>
                        </ul>
                    @endif
                </div>
            </div>

            <div class="row p-1">
                <div class="col-lg-4 col-sm-6">
                    <label for="formGroupExampleInput">{{ __('auth.image') }}: </label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="col-lg-4 col-sm-6 ml-5">
                    <label for="formGroupExampleInput">{{ __('auth.gender') }}: </label>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <input class="form-check-input" type="radio"
                                       name="gender" id="flexRadioDefault1" value="0">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ __('auth.male') }}
                                </label>
                            </div>


                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                           name="gender" id="flexRadioDefault1" value="1"
                                           checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        {{ __('auth.female') }}
                                    </label>
                                </div>
                            </div>
                            @if($errors->any())
                                <ul class="help-block text-danger mt-2">
                                    <li> {{$errors->first('gender')}}</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-auto text-center p-2">
                <button type="submit"
                        class="btn btn-primary w-50 ">{{ __('auth.teacher_add') }}</button>
            </div>
        </fieldset>
    </form>

@endsection
