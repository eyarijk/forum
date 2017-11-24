@extends('layouts.app')
@section('title',$forum->title)
@section('content')
<div class="container-fluid">
  <div class="show-header">
  <h2>{{ $forum->title }}</h2>
  <div>
    <a href="{{ route('forum.create') }}" class="btn btn-primary btn-sm pull-right">Сreate a question</a><br>
  </div>
  </div>
<br>
  <div class="row">
    <div class="col-md-8">
      <div class="well" id="img_style">
        <p>{!!$forum->post!!}</p>
      </div>
      <div class="well well-sm">
        @foreach($forum->tags as $tag)
        <span class="label label-success">{{ $tag->name }}</span>
        @endforeach
        <span class="pull-right">{{date('d F Y ',strtotime($forum->created_at))}} by <a href="" >{{$forum->user->name}}</a></span>
      </div>
      <hr>
      <label>Comments:</label>
      @foreach($forum->comments as $comment)
        <div class="panel panel-default">
          <div class="panel-body">
            <p>{{ $comment->easy_comment }}</p>
            <div class="pull-right">
              <small>{{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}</small>
            </div>
          </div>
        </div>
      @endforeach
      <hr>
      <label>Add comment:</label>
      <form  action="{{ route('createComment.store',$forum->id) }}" method="post">
          {{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="easy_comment" class="form-control" placeholder="Enter comment...">
        </div>
        <button class="btn btn-success" type="submit">Add comment</button>
      </form>
    </div>
    <dib class="col-md-4">
      @if(auth()->user()->id == $forum->user_id)
      <a href="{{ route('forum.edit',$forum->slug) }}" class="btn btn-success btn-block">Edit</a>
      <form action="{{ route('forum.destroy',$forum->id) }}" method="post">
        <input  type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <input  type="submit" class="btn btn-danger btn-block" value="Delete" style="margin:3px 0  3px 0 ;">
      </form>
      @endif
      <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Help!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
      </div>
    </div>
  </div>
</div>
@endsection
