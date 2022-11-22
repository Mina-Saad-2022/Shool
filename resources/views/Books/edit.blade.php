@extends('layout.layout')
@section('title')
    <title>Edit Book - {{$edit_book->title}} </title>
@endsection



{{----------------------------------  ( 1) title page ----------------------------------}}
@section('title_page')
    {{ __('auth.new_book') }}
@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">
        <a href="{{route('book.index')}}">{{ __('auth.all_books') }} </a>
    </li>
    <li class="breadcrumb-item active"> {{ __('auth.new_book') }}</li>

@endsection


{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

    <form method="post" action="{{route('book.edit', $edit_book->id)}}"
          enctype="multipart/form-data">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">{{ __('auth.new_book') }}</legend>
        @csrf
        <div class="row">
            <div class="col-3">
                <label for="formGroupExampleInput">Title Book</label>
                <input type="text" class="form-control" name="title"
                       value="{{$edit_book->title}}" placeholder="book title">
            </div>
            <div class="col-3">
                <label for="formGroupExampleInput">Description Book</label>
                <input type="text" class="form-control" name="description"
                       value="{{$edit_book->description}}" placeholder="book description">
            </div>
            <div class="col-3">
                <label for="formGroupExampleInput">Image Book</label>
                <input type="file" class="form-control" name="image"
                       value="{{$edit_book->image}}">
            </div>

            <div class="col-3">
                @inject('book', 'App\Models\Book')

                @php $book -> all() @endphp
                @if($book->image !== null)
                    <div><img class="image_book" src="{{asset('update/books/' . $book->image)}}"></div>
                @endif
            </div>

        </div>
        <div class="my-auto text-center p-2">
            <button type="submit" class="btn btn-primary w-50 ">Edit Book</button>
        </div>
        </fieldset>
    </form>

@endsection
