@extends('layout.layout')
@section('title')
    <title> {{ __('auth.edit_user') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')
    {{ __('auth.edit_user') }}
@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a
            href="{{route('user.index')}}">{{ __('auth.all_users') }}
        </a>
    </li>
    <li class="breadcrumb-item active">
        {{ __('auth.edit_user') }}
    </li>
@endsection


{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

    <form method="post" action="{{route('user.action_edit', $edit_user->id)}}"
          enctype="multipart/form-data">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.edit_user') }}
                @if($edit_user->image === null)
                    <img class="image_book"
                         src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

                @elseif($edit_user->image !== null)
                    <img class="image_book" src="{{asset('update/users/'.$edit_user->image)}}">
                @endif

            </legend>
            @csrf
            <div class="m-auto">
                <div class="row input_user">
                    <div class="col-lg-4 col-sm-10 ">
                        <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.name') }}
                            :</label>
                        <input class="form-control " name="name" type="text" value="{{ $edit_user->name }}">
                        @if($errors->any())
                            <ul class="help-block text-danger mt-2">
                                <li> {{$errors->first('name')}}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="col-lg-4 col-sm-10 ">
                        <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.email') }}
                            :</label>
                        <input class="form-control " name="email" type="text" value="{{ $edit_user->email }}">
                        @if($errors->any())
                            <ul class="help-block text-danger mt-2">
                                <li> {{$errors->first('email')}}</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="row input_user">
                    <div class="col-lg-4 col-sm-10 ">
                        <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.age') }}
                            :</label>
                        <input class="form-control " name="age" type="number" value="{{ $edit_user->age }}">
                        @if($errors->any())
                            <ul class="help-block text-danger mt-2">
                                <li> {{$errors->first('age')}}</li>
                            </ul>
                        @endif
                    </div>


                    <div class="col-lg-4 col-sm-10 ">
                        <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.phone') }}
                            :</label>
                        <input class="form-control " name="phone" type="text" value="{{ $edit_user->phone }}">
                        @if($errors->any())
                            <ul class="help-block text-danger mt-2">
                                <li> {{$errors->first('phone')}}</li>
                            </ul>
                        @endif
                    </div>

                </div>

                <div class="row input_user">
                    <div class="col-lg-4 col-sm-10 ">
                        <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.password') }}
                            :</label>
                        <input class="form-control " name="password" type="text"
                               value="{{ Crypt::decrypt($edit_user->password) }}">


                        @if($errors->any())
                            <ul class="help-block text-danger mt-2">
                                <li> {{$errors->first('password')}}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="col-lg-4 col-sm-10 ">
                        <label for="formGroupExampleInput" class="col-form-label text-md-end"> {{ __('auth.gender') }}
                            :</label>
                        <div class="container m-2">
                            <div class="row">
                                <div class="col-4">
                                    <input class="form-check-input " type="radio"
                                           name="gender" id="flexRadioDefault1" value="0">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ __('auth.female') }}
                                    </label>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio"
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
                    <div class="row">
                        {{--***************the user image***************--}}
                        <div class="col">
                            <label for="formGroupExampleInput">{{ __('auth.image') }} :</label>
                            <input type="file" class="form-control border border-white" name="image">
                        </div>
                    </div>
                </div>
                <div class="row p-2  input_user">
                    <div class="col-6 d-inline m-auto">
                        <a class="text-light" href="{{route('user.edit',$edit_user->id)}}">
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
            </div>
        </fieldset>
    </form>

@endsection
