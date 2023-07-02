@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
<article class="article-detail">
    <h1 class="article-ttl">{{ $article['title'] }}</h1>
    <div class="article-info">{{ $article['created_at'] }}</div>
    <div class="article-body">{!! nl2br(e($article['body'])) !!}</div>
    <div class="article-control">
        <a href="{{ route('articles.edit', $article) }}">編集</a>
    </div>
</article>
@endsection