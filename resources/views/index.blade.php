


@extends('layouts.app')

@section('content')


@foreach($films as $film)
    <h2><a href="{{url('/films',$film->id)}}">{{$film->name}}</a></h2>
    <p>{{$film->desc}}</p>
@endforeach

@endsection
