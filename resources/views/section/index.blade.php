@extends('layout.layout')
@section('title')

    <title> {{ __('auth.all_sections') }} </title>

@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.all_sections') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

        <li class="breadcrumb-item active">{{ __('auth.all_sections') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')
        <table class='table-striped  table-hover' id="Books">
            <thead class="table-dark">
            <tr>
                <th> # </th>
                <th> {{ __('auth.section') }}</th>
                <th> {{ __('auth.delete') }} </th>
                <th> {{ __('auth.edit') }} </th>
            </tr>
            </thead>
            <tbody>
            @foreach($sections as $Section)
                <tr >
                    <td class="new_id ">
                        {{$Section->id}}
                    </td>
                    <td class="new_title">
                        {{$Section->sections}}
                    </td>
                    <td><a href="{{route('section.delete',$Section->id)}}">
                            <button type="button" class="btn btn-danger">{{ __('auth.delete') }}</button>
                        </a></td>
                    <td><a href="{{route('section.edit',$Section->id)}}">
                            <button type="button" class="btn btn-info"> {{ __('auth.edit') }} </button>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


@endsection
