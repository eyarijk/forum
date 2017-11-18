@extends('layouts.app')
@section('title','Contact')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <button type="button" class="btn btn-success btn-block">Ask a question</button><br>
      @include('forum.includes.tags')
    </div>
    <div class="col-md-9">
      <h1 class="text-center">
        Contact
      </h1>
      <form>
        <fieldset>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="10" placeholder="Enter your question here..." style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </fieldset>
      </form>
    </div>
  </div>
</div>
@endsection
