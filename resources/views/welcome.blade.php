@extends('layouts.app')
@section('title','Homepage')
@section('content')
<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="display-3">Welcome</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p><a class="btn btn-primary btn-lg" href="#">Join >></a></p>
  </div>
  <div class="row">
    <div class="col-md-3">
      @include('forum.includes.tags')
    </div>
    <div class="col-md-9">
      @include('forum.includes.post-list')
    </div>
    <div>
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#">&laquo;</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">4</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">5</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">&raquo;</a>
      </li>
    </ul>
</div>
</div>
@endsection
