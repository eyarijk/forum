@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <button type="button" class="btn btn-success btn-block">Ask a question</button><br>
      <a href="#" class="list-group-item active"> Tags </a>
      <a href="#" class="list-group-item "> PHP </a>
      <a href="#" class="list-group-item "> Javascript </a>
      <a href="#" class="list-group-item "> Laravel </a>
      <a href="#" class="list-group-item "> Python </a>
      <a href="#" class="list-group-item "> CSS </a>
      <a href="#" class="list-group-item "> Angular </a>
      <a href="#" class="list-group-item "> Codeigniter </a>
      <a href="#" class="list-group-item "> Yii </a>
    </div>
    <div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">
            Hot Threads
          </h3>
        </div>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><br>
              <span class="label label-primary">PHP</span>
              <span class="label label-success">Javascript</span>
              <span class="label label-danger">Laravel</span>
              <span class="label label-warning">Python</span>
              <span class="label label-info">CSS</span>
              <span class="pull-right">by eyarijk 1 sec. ago </span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><br>
              <span class="label label-primary">PHP</span>
              <span class="label label-success">Javascript</span>
              <span class="label label-danger">Laravel</span>
              <span class="label label-warning">Python</span>
              <span class="label label-info">CSS</span>
              <span class="pull-right">by eyarijk 1 sec. ago </span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><br>
              <span class="label label-primary">PHP</span>
              <span class="label label-success">Javascript</span>
              <span class="label label-danger">Laravel</span>
              <span class="label label-warning">Python</span>
              <span class="label label-info">CSS</span>
              <span class="pull-right">by eyarijk 1 sec. ago </span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><br>
              <span class="label label-primary">PHP</span>
              <span class="label label-success">Javascript</span>
              <span class="label label-danger">Laravel</span>
              <span class="label label-warning">Python</span>
              <span class="label label-info">CSS</span>
              <span class="pull-right">by eyarijk 1 sec. ago </span>
            </a>
        </div>
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
