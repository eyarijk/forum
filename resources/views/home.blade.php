@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="container-fluid">
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
