@extends('layout.layout')
@section('title')
    <title> {{ __('auth.new_section') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.new_section') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a href="{{route('section.index')}}">{{ __('auth.all_sections') }}</a>
    </li>
    <li class="breadcrumb-item active"> {{ __('auth.new_section') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}



@section('content')

    <form method="post" action="{{route('section.create')}}">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.new_section') }}</legend>
            @csrf

            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">{{ __('auth.section_name') }}</label>
                    <input type="text" class="form-control" name="sections" placeholder="{{ __('auth.new_section_holder') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('sections')}}</li>
                        </ul>
                    @endif
                </div>
            </div>
            <div class="my-auto text-center p-2">
                <button type="submit" class="btn btn-primary w-50 ">{{ __('auth.section_add') }}</button>
            </div>
        </fieldset>
    </form>

@endsection
