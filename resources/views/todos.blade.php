@extends('layout')

@section('todos')

    <p><a href="/todo/create">New task</a></p>

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
                    <a href="/todo/{{ $todo->id }}">
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