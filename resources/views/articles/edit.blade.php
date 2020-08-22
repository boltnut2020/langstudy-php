@extends('layouts.admin')

@section('title', '編集')

@section('content')
  <form action="/videos/{{$video->id}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">動画タイトル</label>
      <input class="form-control" type="text" name="title" placeholder="動画のタイトルを入れる" value="{{$video->title}}">
    </div>
    <div class="form-group">
      <label for="video_id">動画ID</label>
      <input class="form-control" name="video_id" placeholder="動画のIDを入れる" value="{{$video->video_id}}">
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新">
    </div>
  </form>
@endsection
