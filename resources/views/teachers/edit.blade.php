@extends('layout.layout')
@section('title')
    <title> {{ __('auth.edit_teacher') }} {{$edit_teacher->name}}  </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')
{{ __('auth.edit_teacher') }}
@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a href="{{route('teacher.index')}}">{{ __('auth.all_teachers') }}</a>
    </li>
    <li class="breadcrumb-item active"> {{ __('auth.edit_teacher') }} </li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')

    <form method="post" action="{{route('teacher.edit',$edit_teacher->id)}}">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.edit_teacher') }}</legend>
        @csrf
        <div class="row">
            <div class="col">
                <label for="formGroupExampleInput">{{ __('auth.teacher_name') }}</label>
                <input type="text" class="form-control" name="name" value="{{$edit_teacher->name}}"  placeholder="teacher name">
            </div>
            <div class="col form-group">
                <label for="formGroupExampleInput">{{ __('auth.section') }}</label>
                @inject('Section','App\Models\Section')
                @php
                    $Sessions = $Section->all()
                @endphp
                <select name='subject' class="form-control form-select form-select-sm"
                        aria-label=".form-select-sm example">

                    @foreach($Sessions as $Section)
                        <option value="{{$Section->sections}}">{{$Section->sections}}</option>
                    @endforeach

                </select>

            </div>
            <div class="col">
                <label for="formGroupExampleInput">{{ __('auth.date_of_hiring') }}</label>
                <input type="date" class="form-control" name="date" value="{{$edit_teacher->date}}" placeholder="Date of hiring">
            </div>
        </div>
        <div class="my-auto text-center p-2">
            <button type="submit" class="btn btn-primary w-50 ">{{ __('auth.edit_teacher') }}</button>
        </div>
        </fieldset>
    </form>


@endsection
