@extends('layouts.admin')

@section('title', '記事一覧')

@section('content')
    <div class="text-right mb-1">
        <a href="/categories/create" class="btn btn-dark">{{ __('CREATE') }}</a>
    </div>
  @foreach ($categories as $category)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$category->title}}</h5>
            <p>{{$category->video_id}}</p>
            <a class="btn btn-primary" href="/categories/{{$category->id}}">{{ __('SHOW') }}</a>
            <a class="btn btn-primary" href="/categories/{{$category->id}}/edit">{{ __('EDIT') }}</a>
            <form class="d-inline" action="/categories/{{$category->id}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-primary" type="submit" name="" value="{{ __('DELETE') }}">
            </form>
      </div>
  </div>
  @endforeach
@endsection
