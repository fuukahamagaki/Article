<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
    @yield('css')
</head>
<body>
    <header>
        <a href="/" class="header-logo"><div>ふりブロ</div></a>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; ふりブロ
    </footer>
</body>
</html>