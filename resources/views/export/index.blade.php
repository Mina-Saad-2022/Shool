@extends('layout.layout')
@section('title')

    <title>  {{ __('auth.export') }} </title>

@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.export') }}

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">{{ __('auth.export') }}</legend>
        <div class="container">
            <div class="row p-2 justify-content-md-center ">

                <div class="col-sm-2 col-md-2">
                    <h4>
                        {{ __('auth.all_teachers') }}
                    </h4>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.export') }}</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.example') }}</button>
                    </a>
                </div>
            </div>
            <div class="row p-2 justify-content-md-center ">

                <div class="col-sm-2 col-md-2">
                    <h4>
                        {{ __('auth.all_books') }}
                    </h4>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.export') }}</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.example') }}</button>
                    </a>
                </div>
            </div>
            <div class="row p-2 justify-content-md-center ">

                <div class="col-sm-2 col-md-2">
                    <h4>
                        {{ __('auth.all_sections') }}
                    </h4>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.export') }}</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.example') }}</button>
                    </a>
                </div>
            </div>
            <div class="row p-2 justify-content-md-center ">

                <div class="col-sm-2 col-md-2">
                    <h4>
                        {{ __('auth.all_students') }}
                    </h4>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.export') }}</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.example') }}</button>
                    </a>
                </div>
            </div>
            <div class="row p-2 justify-content-md-center ">

                <div class="col-sm-2 col-md-2">
                    <h4>
                        {{ __('auth.all_users') }}
                    </h4>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.export') }}</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-success">{{ __('auth.example') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </fieldset>

@endsection
