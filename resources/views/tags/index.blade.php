@extends('layouts.app')
@section('title','Forum')
@section('content')

<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active">Data</li>
  </ol>
  <hr>
  <div class="row">
    <div class="col-md-4">
      <form action="{{ route('tags.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Tag name</label>
          <input type="text" name="name" value="" class="form-control" placeholder="Enter tag name...">
        </div>
        <button type="submit" class="btn btn-success">Add a tag</button>
      </form>
    </div>
    <div class="col-md-8">
      <label>All tags:</label>
      <table class="table table-striped table-hover table-bordered" >
        <thead class="table-info" >
          <tr>
            <th>ID</th>
            <th>Tag name</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tags as $tag)
            <tr>
              <td>{{$tag->id}}</td>
              <td>{{$tag->name}}</td>
              <td>{{$tag->created_at->diffForHumans()}}</td>
              <td>{{$tag->updated_at->diffForHumans()}}</td>
              <td><a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary btn-sm btn-block">Edit</a></td>
              <td>
                <form action="{{ route('tags.destroy',$tag->id) }}" method="post">
                <input  type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
                <input  type="submit" class="btn btn-danger btn-sm btn-block" value="Delete">
              </form>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
    {!! $tags->links() !!}
    </div>
  </div>

@endsection
