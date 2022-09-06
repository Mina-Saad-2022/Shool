@extends('layout.layout')
@section('title')
    <title> My Profile </title>
@endsection
@section('content')
{{--    @php--}}
{{--        $data = \App\Models\User::all();--}}
{{--            $new =\Illuminate\Support\Facades\Crypt::encrypt($data['password']);--}}
{{--   @endphp--}}
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
                                        My Profile
                                    </h3>
                                </div>
                                <div class="col text-right">
                                    <ol class="breadcrumb float-sm-right p-0 title">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="container m-auto">
                              <div>
                                  <h4>id : <span class="text-red"> {{ Auth::user()->id }}} </span> </h4>
                                  <h4>Name : <span class="text-red">{{ Auth::user()->name }} </span> </h4>
                                  <h4>Email : <span class="text-red"> {{ Auth::user()->email }} </span> </h4>
{{--                                  <h4>password : <span class="text-red"> {{ Crypt::decrypt('$new') }} </span> </h4>--}}
                              </div>
                                <div>
{{--                                    {{asset('update/users/'.auth()->user()->image)}}--}}
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-primary">edit</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-danger">cancel</button>
                                    </div>
                                </div>
                        </div>

    {{--                        <input type="password" autocorrect="off"  autocapitalize="off" autocomplete="off"--}}
    {{--                               name="password" placeholder="Password" class="form-control"--}}
    {{--                               id="password" value="{{ old('password') }}" >--}}
@endsection
                            <script>
                                import Buttons from "../../../public/pages/UI/buttons.html";
                                export default {
                                    components: {Buttons}
                                }
                            </script>
