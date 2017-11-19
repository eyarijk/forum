@extends('layouts.app')
@section('title',$forum->title)
@section('content')
<div class="container-fluid">
<h1>{{ $forum->title }}</h1>
<p>{{ $forum->post }}</p>

</div>
@endsection
