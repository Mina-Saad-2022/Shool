@extends('layout.layout')
@section('title')
    <title>{{ __('auth.all_users') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.all_users') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">{{ __('auth.all_users') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

    <table class='table-striped  table-hover' id="Books">
        <thead class="table-dark">
        <tr>
            <th> #</th>
            <th> {{ __('auth.name') }}</th>
            <th> {{ __('auth.email') }}</th>
            <th> {{ __('auth.password') }}</th>
            <th> {{ __('auth.admin_user') }}</th>
            <th> {{ __('auth.age') }}</th>
            <th> {{ __('auth.phone') }}</th>
            <th> {{ __('auth.gender') }}</th>
            <th> {{ __('auth.image') }}</th>
            <th> {{ __('auth.delete') }}</th>
            <th> {{ __('auth.edit') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users  as $user)
            <tr>
                <td>

                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    {{ Crypt::decrypt($user->password) }}
                </td>
                <td>
                    @if(!empty($user->email))
                        <p>{{ __('auth.admin') }}</p>
                    @else
                        <p>{{ __('auth.user') }}</p>
                    @endif
                </td>
                <td>{{$user->age}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    @if($user->gender === 1)
                        <p>Male</p>
                    @else
                        <p>Female</p>
                    @endif
                </td>

                <td>
                    @if($user->image === null)
                        <img class="image_book"
                             src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

                    @elseif($user->image !== null)
                        <img class="image_book" src="{{asset('update/users/'.$user->image)}}">
                    @endif


                </td>
                <td>
                    <a href="{{route('user.delete',$user->id)}}">

                        <button type="button" class="btn btn-danger">{{ __('auth.delete') }}</button>


                    </a>
                </td>
                <td>
                    <a href="{{route('user.edit',$user->id)}}">

                        <button type="button" class="btn btn-info">{{ __('auth.edit') }}</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
