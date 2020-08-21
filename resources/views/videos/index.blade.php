{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '記事一覧')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <div>
    <a href="/videos/create">新規作成</a>
  </div>
  <h1>ほげ</h1>
  @foreach ($videos as $video)
    <h4>{{$video->title}}</h4>
    <p>{{$video->video_id}}</p>
    <a href="/videos/{{$video->id}}">詳細を表示</a>
    <a href="/videos/{{$video->id}}/edit">編集する</a>
    <form action="/videos/{{$video->id}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="" value="削除する">
    </form>
    <hr>
  @endforeach
@endsection
