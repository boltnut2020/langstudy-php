@extends('layouts.admin')

@section('title', '新規作成')

@section('content')
  <form action="/videos" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">タイトル</label>
      <input class="form-control" type="text" name="title" placeholder="動画のタイトルを入れる">
      <small id="titleHelp" class="form-text text-muted">動画タイトルを入力します</small>
    </div>
    <div class="form-group">
      <label for="body">動画ID</label>
      <input class="form-control" type="text" name="video_id" placeholder="動画のIDを入れる">
    </div>
    <div>
      <input class="btn btn-primary" type="submit" value="送信">
    </div>
  </form>
@endsection
