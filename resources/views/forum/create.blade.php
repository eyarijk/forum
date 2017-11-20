@extends('layouts.app')
@section('title','Write a question')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('forum.store') }}" method="post" role="form">
        {{ csrf_field() }}
        <div class="well">
          <h4>Write a question</h4>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="" class="form-control" placeholder="Enter title...">
          </div>
          <div class="form-group">
            <label for="post">Post</label>
            <textarea name="post" value="" id="description" class="form-control" placeholder="Ask a question..."> </textarea>
          </div>
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Help!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
      </div>
    </div>
  </div>
</div>
@endsection
