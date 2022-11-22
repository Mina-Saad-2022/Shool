@extends('layout.layout')
@section('title')
    <title> {{ __('auth.new_user') }} </title>
@endsection
{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.new_user') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a href="{{route('user.index')}}">{{ __('auth.all_users') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('auth.new_user') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

<form method="post" action="{{route('user.action_create')}}"
      enctype="multipart/form-data">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">{{ __('auth.new_user') }}</legend>
        @csrf
        <div class="row">
            {{--*************** the user name ***************--}}
            <div class="col-4 p-2">
                <label for="formGroupExampleInput">{{ __('auth.user_name') }}</label>
                <input type="text" class="form-control" name="name"
                       placeholder="{{ __('auth.user_name') }}" >
                @if($errors->any())
                    <ul class="help-block text-danger mt-2">
                        <li> {{$errors->first('name')}}</li>
                    </ul>
                @endif
            </div>
            {{--*************** the user password ***************--}}
            <div class="col-4 p-2">
                <label for="formGroupExampleInput">{{ __('auth.password') }}</label>
                <input type="text" class="form-control" name="password"
                       placeholder="{{ __('auth.password') }}" >
                @if($errors->any())
                    <ul class="help-block text-danger mt-2">
                        <li> {{$errors->first('password')}}</li>
                    </ul>
                @endif
            </div>
            {{--*************** the user email ***************--}}
            <div class="col-4 p-2">
                <label for="formGroupExampleInput">{{ __('auth.user_email') }}</label>
                <input type="text" class="form-control" name="email"
                       placeholder="{{ __('auth.user_email') }}" >
                @if($errors->any())
                    <ul class="help-block text-danger mt-2">
                        <li> {{$errors->first('email')}}</li>
                    </ul>
                @endif
            </div>
        </div>
        <div class="row">

            {{--*************** the user phone ***************--}}
            <div class="col-4 p-2">
                <label for="formGroupExampleInput">{{ __('auth.user_phone') }}</label>
                <input type="text" class="form-control" name="phone"
                       placeholder="{{ __('auth.user_phone') }}" >
                @if($errors->any())
                    <ul class="help-block text-danger mt-2">
                        <li> {{$errors->first('email')}}</li>
                    </ul>
                @endif
            </div>

            {{--*************** the user age ***************--}}

            <div class="col-4 p-2">
                <label for="formGroupExampleInput">{{ __('auth.user_age') }}</label>
                <input type="number" class="form-control" name="age"
                       placeholder="{{ __('auth.user_age') }}" >
                @if($errors->any())
                    <ul class="help-block text-danger mt-2">
                        <li> {{$errors->first('age')}}</li>
                    </ul>
                @endif
            </div>

            {{--*************** the user gender ***************--}}

            <div class="col-4 p-2">
                <label for="formGroupExampleInput">{{ __('auth.student_gender') }}</label>
                <div class="container">
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
                        @if($errors->any())
                            <ul class="help-block text-danger mt-2">
                                <li> {{$errors->first('gender')}}</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            {{--***************the user image***************--}}
            <div class="col-5 p-2">
                <label for="formGroupExampleInput">{{ __('auth.image') }}</label>
                <input type="file" class="form-control" name="image">
            </div>

        </div>


        <div class="my-auto text-center p-2">
            <button type="submit"
                    class="btn btn-primary w-50 ">{{ __('auth.new_user') }}</button>
        </div>
    </fieldset>
</form>

@endsection
