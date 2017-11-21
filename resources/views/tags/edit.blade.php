@extends('layouts.app')
@section('title','Forum')
@section('content')
<div class="well">
  <form action="{{ route('tags.update', $tags->id) }}" method="post" role="form">
   <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
    <h4>Edit a tag: {{$tags->name}}</h4>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" value="{{ $tags->name }}" class="form-control" placeholder="Enter Name...">
    </div>
    <button type="submit" class="btn btn-success">Save</button> <a class="btn btn-danger" href="{{ route('tags.index') }}">Cancel</a>
  </form>
</div>


@endsection
