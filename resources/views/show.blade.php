@extends('layouts.app')

@section('title', 'film name')
@section('content')


<a href="{{url('/films/delete', $film->id)}}">Delete</a>
<a href="{{url('/films/edit', $film->id)}}">Update</a>


<h1>{{$film->name}}</h1>
<p>{{$film->desc}}</p>
@endsection
