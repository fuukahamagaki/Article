@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<div class="container">
    <form action="/" method="post">
        @csrf
        <dl class="form-list">
            <dt>タイトル</dt>
            <dd><input type="text" name="title" value="{{ old('title') }}"></dd>
            <dt>本文</dt>
            <dd><textarea name="body" rows="5">{{ old('body') }}</textarea></dd>
        </dl>
        <button type="submit">投稿する</button>
        <a href="/">ホームへ戻る</a>
    </form>
</div>
@endsection