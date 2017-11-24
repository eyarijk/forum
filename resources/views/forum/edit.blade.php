@extends('layouts.app')
@section('title','Edit a question')
@section('content')
@if(auth()->user()->id == $forum->user_id)
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('forum.update', $forum->slug) }}" method="post" role="form">
         <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="well">
          <h4>Edit a question</h4>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $forum->title }}" class="form-control" placeholder="Enter title...">
          </div>
          <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple="multiple" name="tags[]" class="form-control tags" placeholder="Enter tags...">
              @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="post">Post</label>
            <textarea name="post" id="description" class="form-control" placeholder="Ask a question...">{{ $forum->post }}</textarea>
          </div>
          <button type="submit" class="btn btn-success">Save</button>
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
@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.tags').select2();
      $('.tags').select2().val({!! json_encode($forum->tags()->allRelatedIds() ) !!}).trigger('change');
    });
  </script>
@endsection
@else
<script type="text/javascript">
    window.location = "/";
</script>
@endif
