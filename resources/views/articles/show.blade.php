{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.admin')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事詳細')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <h1>{{$article->title}}</h1>
  <p>{{$article->description}}</p>
  <p>{{$article->content}}</p>
  <br><br>
  <a href="/articles">一覧に戻る</a>
@endsection
