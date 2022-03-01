@extends('layouts.app')

@section('content')

<form method="post" class="py-5" action="{{url('/films/store')}}">
    @csrf
<div class="form-group">
    <input type="text" name="name" id="" class="form-control" placeholder="Film name" aria-describedby="helpId">
  </div>
  <div class="form-group">
    <input type="text" name="desc" id="" class="form-control" placeholder="Film desc" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-info" value="Create New" aria-describedby="helpId">
  </div>

</form>

@endsection
