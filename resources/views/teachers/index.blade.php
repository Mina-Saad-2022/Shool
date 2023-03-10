@extends('layout.layout')
@section('title')
    <title> {{ __('auth.all_teachers') }} </title>
@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.all_teachers') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">{{ __('auth.all_teachers') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')

    <table class='table-striped  table-hover' id="Books">
        <thead class="table-dark">
        <tr>
            <th> #</th>
            <th> {{ __('auth.name') }}</th>
            <th> {{ __('auth.phone') }}</th>
            <th> {{ __('auth.address') }}</th>
            <th> {{ __('auth.gender') }}</th>
            <th> {{ __('auth.image') }}</th>
            <th> {{ __('auth.section') }}</th>
            <th> {{ __('auth.date_of_hiring') }}</th>
            <th> {{ __('auth.delete') }}</th>
            <th> {{ __('auth.edit') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers  as $teacher)
            <tr>
                <td>

                    {{$teacher->id}}
                </td>
                <td>
                    {{$teacher->name}}
                </td>
                <td> {{$teacher->phone }}</td>
                <td> {{$teacher->address }}</td>
                <td>
                    @if($teacher->gender == 0)
                        <p>{{ __('auth.male') }}</p>
                    @else
                        <p>{{ __('auth.female') }}</p>

                    @endif
                </td>
                <td>
                    @if($teacher->image === null)

                        @if($teacher->gender === 0)
                            <img class="image_book" src="{{asset('update/teachers/demo/male.png')}}">
                        @else
                            <img class="image_book" src="{{asset('update/teachers/demo/female.png')}}">
                        @endif
                    @else
                        <img class="image_book" src="{{asset('update/teachers/' . $teacher->image)}}">
                    @endif
                </td>


                <td>
                    @foreach($teacher->sections as $section)
                        {{$section->subjects}}
                    @endforeach
                </td>
                <td>
                    {{$teacher->date}}
                </td>

                <td>
                    <a href="{{route('teacher.delete',$teacher->id)}}">
                        <button type="button" class="btn btn-danger">{{ __('auth.delete') }}</button>
                    </a>
                </td>
                <td><a href="{{route('teacher.edit',$teacher->id)}}">
                        <button type="button" class="btn btn-info">{{ __('auth.edit') }}</button>
                    </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
