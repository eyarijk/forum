@extends('layouts.app')
@section('title','Homepage')
@section('content')
<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="display-3">Welcome</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p><a class="btn btn-primary btn-lg" href="{{ route('forum.index') }}">Join >></a></p>
  </div>
  <div class="row">
    <div class="col-md-3">
      @include('forum.includes.tags')
    </div>
    <div class="col-md-9">
        @include('forum.includes.post-list')
        {!! $forum->links() !!}
    </div>
</div>
</div>
@endsection
