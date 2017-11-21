@extends('layouts.app')
@section('title','Forum')
@section('content')

<div class="container-fluid">
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
