@extends('layout.layout')
@section('title')
    <title>  {{ __('auth.all_students') }} </title>

@endsection

{{----------------------------------  ( 1) title page ----------------------------------}}

@section('title_page')

    {{ __('auth.all_students') }}

@endsection

{{----------------------------------  ( 2 ) title links ----------------------------------}}

@section('title_links')

    <li class="breadcrumb-item active">{{ __('auth.all_students') }}</li>

@endsection

{{----------------------------------  ( 3 ) page conect ----------------------------------}}


@section('content')
    <table class='table-striped  table-hover' id="Books">
        <thead class="table-dark">
        <tr>
            <th> #</th>
            <th> {{ __('auth.student') }}</th>
            <th> {{ __('auth.age') }}</th>
            <th> {{ __('auth.class') }}</th>
            <th> {{ __('auth.gender') }}</th>
            <th> {{ __('auth.delete') }} </th>
            <th> {{ __('auth.edit') }} </th>
        </tr>
        </thead>
        <tbody>
        @foreach($Students as $student)
            <tr>
                <td class="new_id ">
                    {{$student->id}}
                </td>
                <td class="new_id ">
                    {{$student->name}}
                </td>
                <td class="new_title">
                    {{$student->age}}
                </td>
                <td class="new_title">
                    {{$student->student_class}}
                </td>
                <td class="new_title">
                    @if($student->gender == 1)
                        <p>{{ __('auth.male') }}</p>
                    @else
                        <p>{{ __('auth.female') }}</p>

                    @endif
                </td>
                <td>
                    <a href="{{route('student.delete',$student->id)}}">
                        <button type="button" class="btn btn-danger">{{ __('auth.delete') }}</button>
                    </a>
                </td>
                <td>
                    <a href="{{route('student.edit',$student->id)}}">
                        <button type="button" class="btn btn-info">{{ __('auth.edit') }}</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
