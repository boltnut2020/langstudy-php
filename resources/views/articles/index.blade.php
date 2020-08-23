@extends('layouts.admin')

@section('title', '記事一覧')

@section('content')
    <div class="text-right mb-1">
        <a href="/articles/create" class="btn btn-primary">新規作成</a>
    </div>
  @foreach ($articles as $article)
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p>{{$article->article_id}}</p>
            <div class="text-right">
                <a class="btn btn-light" href="/articles/{{$article->id}}">詳細を表示</a>
                <a class="btn btn-light" href="/articles/{{$article->id}}/edit">編集する</a>
                <form class="d-inline" action="/articles/{{$article->id}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input class="btn btn-light" type="submit" name="" value="削除する">
                </form>
            </div>
      </div>
  </div>
  @endforeach
    {{ $articles->links() }}
@endsection
