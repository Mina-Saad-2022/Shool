@extends('layout.layout')
@section('title')
    <title> All Admins </title>
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
                                    <h3 class="card-title"><i
                                            class="uil uil-book-reader"></i>{{ __('auth.all_admins') }}</h3>
                                </div>
                                <div class="col text-right">
                                    <ol class="breadcrumb float-sm-right p-0 title">
                                        <li class="breadcrumb-item"><a
                                                href="{{route('home')}}">{{ __('auth.home') }}</a></li>
                                        <li class="breadcrumb-item active">{{ __('auth.all_admins') }}</li>

                                    </ol>
                                </div>

                            </div>
                        </div>
                        <div class="card-body ">
                            <table class='table-striped  table-hover' id="Books">
                                <thead class="table-dark">
                                <tr>
                                    <th> #</th>
                                    <th> {{ __('auth.name') }}</th>
                                    <th> {{ __('auth.email') }}</th>
{{--                                    <th> {{ __('auth.password') }}</th>--}}
                                    <th> {{ __('auth.image') }}</th>
                                    <th> {{ __('auth.delete') }}</th>
                                    <th> {{ __('auth.edit') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admins  as $admin)
                                    <tr>
                                        <td>

                                            {{$admin->id}}
                                        </td>
                                        <td>
                                            {{$admin->name}}
                                        </td>
                                        <td>
                                            {{$admin->email}}
                                        </td>
{{--                                        <td>--}}
{{--                                            {{$admin->password}}--}}
{{--                                        </td>--}}
                                        <td>
{{--                                            @if($admin->image === null)--}}

{{--                                                <img class="image_book" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLX0T3Ufo9lEjLJjYxKjDF7rFk41quZvjpzQ&usqp=CAU">--}}

{{--                                            @elseif($admin->image !== null)--}}
{{--                                                <img class="image_book" src="{{asset('update/users/'.$admin->image)}}">--}}
{{--                                            @endif--}}

                                            <img class="image_book" src="{{asset('update/users/'.$admin->image)}}">

                                        </td>
                                        <td>
                                            <a href="{{route('admin.delete',$admin->id)}}">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.edit',$admin->id)}}">
                                                <button type="button" class="btn btn-info">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
