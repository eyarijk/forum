@extends('layouts.app')
@section('title','Profile')
@section('content')

<div class="container-fluid">
  <h2>Hello {{ $user['name'].$user['second_name'] }} </h2>
</div>
@endsection
