@extends('layouts.app')

@section('content')

<form method="post" action="{{url('/films/update', $film->id)}}">
    @csrf
<div class="form-group">
<input type="text" value="{{$film->name}}" name="name" id="" class="form-control" placeholder="Film name" aria-describedby="helpId">
  </div>
  <div class="form-group">
    <input type="text" value="{{$film->desc}}" name="desc" id="" class="form-control" placeholder="Film desc" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-info" value="Update" aria-describedby="helpId">
  </div>

</form>

@endsection
