{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.admin')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事詳細')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <h1>{{$video->title}}</h1>
  <p>{{$video->video_id}}</p>
  <br><br>
  <a href="/videos">一覧に戻る</a>
@endsection