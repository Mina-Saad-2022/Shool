@extends('layout.layout')
@section('title')
    <title> {{ __('auth.profile') }}    </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.profile') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        {{ __('auth.profile') }}
    </li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

    <div class="container m-auto">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.profile') }} <img class='image' src=" {{asset('update/users/'.auth()->user()->image)}} " > </legend>
            <div class="row input_user">

                <div class="col-lg-4 col-sm-10 ">
                    <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.name') }}:</label>
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" readonly>
                </div>

                <div class="col-lg-4 col-sm-10 ">
                    <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.email') }}:</label>
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" readonly>
                </div>
            </div>

            <div class="row input_user">
                <div class="col-lg-4 col-sm-10 ">
                    <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.age') }}:</label>
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->age }}" readonly>
                </div>


                <div class="col-lg-4 col-sm-10 ">
                    <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.phone') }}:</label>
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->phone }}" readonly>
                </div>

            </div>

            <div class="row input_user">
                <div class="col-lg-4 col-sm-10 ">
                    <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.password') }}:</label>
                    <input class="form-control" type="text" placeholder="{{  Crypt::decrypt(Auth::user()->password)  }}" readonly>
                </div>

                <div class="col-lg-4 col-sm-10 ">
                    <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.gender') }}:</label>
                    @if(Auth::user()->age === 0)
                        <input class="form-control" type="text" placeholder="{{ __('auth.male') }}" readonly>

                    @else
                        <input class="form-control" type="text" placeholder="{{ __('auth.female') }}" readonly>
                    @endif
                </div>

                <div class="col-lg-6 col-sm-10 ">

                </div>
            </div>

            <div class="row p-2  input_user">
                <div class="col-6 d-inline m-auto">
                    <a class="text-light" href="{{route('user.edit',Auth::user()->id)}}">
                        <button class="col-6 btn btn-primary">{{ __('auth.edit') }}</button>
                    </a>
                </div>
                <div class="col-6 d-inline m-auto">
                    <a class="text-light"
                       href="{{route('home')}}">
                        <button class="col-6  btn btn-danger">{{ __('auth.cancel') }}
                        </button>
                    </a>
                </div>
            </div>
        </fieldset>

    </div>


@endsection
