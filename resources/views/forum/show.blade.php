@extends('layouts.app')
@section('title',$forum->title)
@section('content')
<div class="container-fluid">
  <div class="show-header">
  <h1>{{ $forum->title }}</h1>
  <div>
    <a href="{{ route('forum.create') }}" class="btn btn-info pull-right">Сreate a question</a>
  </div>
  </div>
<br>
  <div class="row">
    <div class="col-md-8">
      <div class="well">
        <p>{!!$forum->post!!}</p>
      </div>
      <div class="well well-sm">
        <span class="label label-primary">PHP</span>
        <span class="label label-success">Javascript</span>
        <span class="label label-danger">Laravel</span>
        <span class="label label-warning">Python</span>
        <span class="label label-info">CSS</span>
        <span class="pull-right">{{$forum->created_at}} by <a href="" >eyarijk</a></span>
      </div>
    </div>
    <dib class="col-md-4">
      <a href="{{ route('forum.edit',$forum->id) }}" class="btn btn-success btn-block">Edit</a><br>
      <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Help!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
      </div>
    </div>
  </div>
</div>
@endsection
