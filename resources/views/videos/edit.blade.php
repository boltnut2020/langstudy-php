{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <form action="/videos/{{$video->id}}" method="post">
    {{ csrf_field() }}
    <div>
      <label for="title">動画タイトル</label>
      <input type="text" name="title" placeholder="動画のタイトルを入れる" value="{{$video->title}}">
    </div>
    <div>
      <label for="video_id">動画ID</label>
      <input name="video_id" placeholder="動画のIDを入れる" value="{{$video->video_id}}">
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新">
    </div>
  </form>
@endsection
