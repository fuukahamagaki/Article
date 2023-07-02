@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<a href="/create" class="form-link">新規投稿</a>

<table class="article-item">
    <tr class="article-ttl">
        <th></th>
        <th>タイトル</th>
        <th>本文</th>
    </tr>
    @foreach($articles as $article)
    <tr class="article-body">
        <td>{{ $article['created_at'] }}</td>
        <td>
            <a href="{{ route('articles.show', $article) }}">{{ $article['title'] }}</a>
        </td>
        <td>{{ $article['body'] }}</td>
    </tr>
    @endforeach
</table>

@endsection

