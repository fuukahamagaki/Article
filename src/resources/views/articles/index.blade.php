@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">ログアウト</button>
</form>
<a href="/create" class="form-link">新規投稿</a>

<form action="index" method="get">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
</form>

<table class="article-item">
    <tr class="article-ttl">
        <th></th>
        <th>タイトル</th>
        <th>本文</th>
    </tr>
    @forelse($articles as $article)
    <tr class="article-body">
        <td>{{ $article['created_at'] }}</td>
        <td>
            <a href="{{ route('articles.show', $article) }}">{{ $article['title'] }}</a>
        </td>
        <td>{{ $article['body'] }}</td>
    </tr>
    @empty
    <td>No articles!!</td>
    @endforelse
</table>

@endsection

