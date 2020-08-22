@extends('layouts.admin')

@section('title', '記事一覧')

@section('content')
    <div>
        <a href="/categories/create">新規作成</a>
    </div>
  @foreach ($categories as $category)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$category->title}}</h5>
            <p>{{$category->video_id}}</p>
            <a class="btn btn-primary" href="/categories/{{$category->id}}">詳細を表示</a>
            <a class="btn btn-primary" href="/categories/{{$category->id}}/edit">編集する</a>
            <form class="d-inline" action="/categories/{{$category->id}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-primary" type="submit" name="" value="削除する">
            </form>
      </div>
  </div>
  @endforeach
@endsection
