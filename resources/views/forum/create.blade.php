@extends('layouts.app')
@section('title','Write a question')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('forum.store') }}" method="post" role="form">
        {{ csrf_field() }}
        <div class="well">
          <h4>Write a question</h4>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="" class="form-control" placeholder="Enter title...">
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
            <textarea name="post" value="" id="description" class="form-control" placeholder="Ask a question..."> </textarea>
          </div>
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Help!</strong><br>A tag is a keyword or label that categorizes your question with other, similar questions. Using the right tags makes it easier for others to find and answer your question.
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    $('.tags').select2();
  });
</script>
@endsection
