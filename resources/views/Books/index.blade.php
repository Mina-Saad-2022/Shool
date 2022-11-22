@extends('layout.layout')
@section('title')
    <title>{{ __('auth.all_books') }}</title>

@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.all_books') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">{{ __('auth.all_books') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}

@section('content')

        <table class='table-striped  table-hover' id="Books">
            <thead class="table-dark">
            <tr>
                <th> # </th>
                <th> {{ __('auth.title') }}</th>
                <th>{{ __('auth.description') }} </th>
                <th > {{ __('auth.image') }} </th>
                <th> {{ __('auth.delete') }}</th>
                <th> {{ __('auth.edit') }} </th>

            </tr>
            </thead>
            <tbody>
            @foreach($BOOKS as $book)
                <tr >
                    <td class="new_id ">
                        {{$book->id}}
                    </td>
                    <td class="new_title">
                        {{$book->title}}
                    </td>
                    <td class="new_des">
                        {{$book->description}}
                    </td>

                    <td>
                        @if($book->image === null)

                            <img class="image_book" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLX0T3Ufo9lEjLJjYxKjDF7rFk41quZvjpzQ&usqp=CAU">

                        @elseif($book->image !== null)
                            <img class="image_book" src="{{asset('update/books/' . $book->image)}}">
                        @endif
                    </td>
                    <td><a href="{{route('book.delete',$book->id)}}">
                            <button type="button" class="btn btn-danger">{{ __('auth.delete') }}</button>
                        </a></td>
                    <td><a href="{{route('book.edit',$book->id)}}">
                            <button type="button" class="btn btn-info">{{ __('auth.edit') }}</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
