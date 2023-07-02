@csrf
<dl class="form-list">
    <dt>タイトル</dt>
    <dd><input type="text" name="title" value="{{ old('title', $article['title']) }}"></dd>
    <dt>本文</dt>
    <dd><textarea name="body">{{ old('body', $article['body']) }}</textarea></dd>
</dl>