@extends('layout.layout')
@section('title')
    <title> {{ __('auth.new_book') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

{{ __('auth.new_book') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

<li class="breadcrumb-item active"><a href="{{route('book.index')}}">{{ __('auth.all_books') }}</a></li>
<li class="breadcrumb-item active">{{ __('auth.new_book') }}</li>
@endsection


{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

    <form method="post" action="{{route('book.create')}}" enctype="multipart/form-data">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.new_book') }}</legend>
            @csrf
            <div class="row">
                <div class="col">
                    <label for="title">{{ __('auth.title_book') }}</label>

                    <input type="text" class="form-control" name="title" id="title" placeholder="{{ __('auth.title_book_holder') }}">
                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('title')}}</li>
                        </ul>
                    @endif

                </div>
                <div class="col">
                    <label for="formGroupExampleInput">{{ __('auth.description_book') }}</label>
                    <input type="text" class="form-control" name="description"
                           placeholder="{{ __('auth.description_book_holder') }}">

                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('description')}}</li>
                        </ul>
                    @endif
                </div>
                <div class="col" >
                    <label for="formGroupExampleInput">{{ __('auth.image_book') }}</label>
                    <input type="file"  name="image">

                    @if($errors->any())
                        <ul class="help-block text-danger mt-2">
                            <li> {{$errors->first('image')}}</li>
                        </ul>
                    @endif
                </div>
            </div>
            <div class="my-auto text-center p-2">
                <button type="submit" class="btn btn-primary w-50 ">{{ __('auth.book_add') }}</button>
            </div>
        </fieldset>
    </form>

@endsection
