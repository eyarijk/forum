<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">
      Hot Threads
    </h3>
  </div>
  @foreach($forum as $forum)
    <div class="list-group" >
      <a href="{{ route('forum.show',$forum->slug) }}" class="list-group-item list-group-item-action">
        <h4 class="list-group-item-heading">{{ $forum->title }}</h4>
        <p class="list-group-item-text">{{ substr(substr(strip_tags($forum->post),0,300), 0, strrpos(substr(strip_tags($forum->post),0,200), ' '))."… " }}</p><br>
        @foreach($forum->tags as $tag)
          <span class="label label-success">{{ $tag->name }}</span>
        @endforeach
        <span class="pull-right">{{$forum->created_at->diffForHumans()}}</span>
      </a>
  </div>
  @endforeach
</div>
