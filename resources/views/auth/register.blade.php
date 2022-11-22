@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            {{--user name--}}
                            <div class="row">
                                <div class="col ">
                                    <div>
                                        <label for="name" class="col-form-label text-md-end">{{ __('Name') }} :</label>
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col ">
                                    {{--user email--}}
                                    <label for="email"
                                           class="col-form-label text-md-end">{{ __('Email Address') }} :
                                    </label>
                                    <div>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col">
                                    {{--user password--}}
                                    <label for="password"
                                           class="col-form-label text-md-end">{{ __('Password') }} :</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="password-confirm"
                                           class=" col-form-label text-md-end">{{ __('Confirm Password') }} :</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">

                                </div>
                            </div>


                            <div class="row">
                                {{--user age--}}
                                <div class="col">
                                    <label for="formGroupExampleInput"
                                           class=" col-form-label text-md-end">{{ __('auth.user_age') }} :</label>
                                    <input type="number" class="form-control" name="age"
                                           placeholder="{{ __('auth.user_age') }}">
                                    @if($errors->any())
                                        <ul class="help-block text-danger mt-2">
                                            <li> {{$errors->first('age')}}</li>
                                        </ul>
                                    @endif
                                </div>
                                {{--user phone--}}
                                <div class="col">
                                    <label for="formGroupExampleInput"
                                           class="col-form-label text-md-end">{{ __('auth.user_phone') }} :
                                    </label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="{{ __('auth.user_phone') }}">
                                    @if($errors->any())
                                        <ul class="help-block text-danger mt-2">
                                            <li> {{$errors->first('phone')}}</li>
                                        </ul>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <label for="formGroupExampleInput"
                                           class=" col-form-label text-md-end">{{ __('auth.student_gender') }} :</label>
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
                                        </div>
                                    </div>
                                </div>



                            <div class="col">
                                <label for="image"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.image') }} :</label>
                                <input id="image" type="file" class="form-control " name="image">
                            </div>
                            </div>



                                <div class="row  ">
                                    <div class="col p-2">
                                        <button type="submit" class="m-auto col-12  btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                        </form>
                        @yield('footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
