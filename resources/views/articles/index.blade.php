@extends('layouts.admin')

@section('title', '記事一覧')

@section('content')
    <div>
        <a href="/articles/create">新規作成</a>
    </div>
  @foreach ($articles as $video)
    <div class="card">
        <amp-img width="480" height="360" layout="responsive" class="card-img-top" src="<?php echo sprintf(config('const.articles.YOUTUBE_THUMBNAIL_PTN'), $video->video_id) ?>" alt="Card image cap"></amp-img>
        <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p>{{$article->video_id}}</p>
            <a class="btn btn-primary" href="/articles/{{$video->id}}">詳細を表示</a>
            <a class="btn btn-primary" href="/articles/{{$video->id}}/edit">編集する</a>
            <form class="d-inline" action="/articles/{{$video->id}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-primary" type="submit" name="" value="削除する">
            </form>
      </div>
  </div>
  @endforeach
@endsection
