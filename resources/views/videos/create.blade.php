{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <form action="/videos" method="post">
    {{-- 以下を入れないとエラーになる --}}
    {{ csrf_field() }}
    <div>
      <label for="title">タイトル</label>
      <input type="text" name="title" placeholder="動画のタイトルを入れる">
    </div>
    <div>
      <label for="body">動画ID</label>
      <input type="text" name="video_id" placeholder="動画のIDを入れる">
    </div>
    <div>
      <input type="submit" value="送信">
    </div>
  </form>
@endsection
