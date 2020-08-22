@extends('layouts.admin')

@section('title', '編集')

@section('content')
<form action="/articles/{{$article->id}}" method="post">
<div class="row">
  <div class="col-9">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">タイトル</label>
      <input class="form-control" type="text" name="title" placeholder="タイトルを入力してください" value="{{ $article->title }}">
      <small id="titleHelp" class="form-text text-muted">記事のタイトルを入力します</small>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input class="form-control" type="text" name="description" placeholder="概要を入力してください" value="{{ $article->description }}">
      <small id="descriptionHelp" class="form-text text-muted">記事の概要を入力します</small>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input class="form-control" type="text" name="content" placeholder="本文を入力してください" value="{{ $article->content }}">
      <small id="contentHelp" class="form-text text-muted">記事の本文を入力します</small>
    </div>

    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新">
    </div>
  </div>
  <div class="col-3">
	
    <ul class="list-group">
    @foreach ($categories as $category)
        <li class="list-group-item">
            {{ $category->title }}
            <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                    {{ in_array($category->id, $articleCategory, true) ? 'checked="checked"' : ''}}>
        </li>
    	@foreach ($category->childrenRecursive as $children)
            <li class="list-group-item">>>
                {{ $children->title }}
                <input type="checkbox" name="categories[]" value="{{ $children->id }}" 
                    {{ in_array($children->id, $articleCategory, true) ? 'checked="checked"' : ''}}>
            </li>
        @endforeach
    @endforeach
    </ul>
  </div>

  </div>
</form>
@endsection
