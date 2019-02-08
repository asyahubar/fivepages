@extends('layout')

@section('todo')
	<p><em>{{$todo->title}}</em></p>
	<p>Description: {{$todo->body}}</p>
	<p>Status: {{$todo->status}}</p>
	<p>Date: {{$todo->date}}</p>
@endsection

