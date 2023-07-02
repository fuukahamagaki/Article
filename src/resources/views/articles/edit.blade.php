@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<form action="{{ route('articles.update', $article) }}" method="post">
    @method('patch')
    @include('articles.form')
    <button type="submit">更新する</button>
    <a href="{{ route('articles.show', $article) }}">戻る</a>
</form>
@endsection