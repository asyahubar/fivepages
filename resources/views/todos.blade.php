@extends('layout')

@section('todos')

    @php
    $todos = \App\Todo::all();
    @endphp

    <table>
        <tr>
            <th>Status</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
        @foreach($todos as $todo)
            <tr>
                <td>
                    {{ $todo->status }}
                </td>
                <td>
                    <a href="http://ah-fivepages.test/todo/{{ $todo->id }}">
                        {{ $todo->title }}
                    </a>
                </td>
                <td>
                    {{ date('r',$todo->date) }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection