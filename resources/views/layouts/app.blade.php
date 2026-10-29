<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Новости 24')</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial; background: #f1f5f9; color: #1e293b; }
        header { background: #172554; color: white; padding: 25px 8%; }
        header h1 { margin-top: 0; }
        nav a { color: white; margin-right: 20px; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { max-width: 1000px; margin: 30px auto; padding: 0 20px; min-height: 400px; }
        .card { background: white; padding: 22px; margin-bottom: 18px; border-radius: 10px; }
        input, textarea { display: block; width: 100%; padding: 12px; margin: 10px 0; }
        button { padding: 12px 20px; background: #1d4ed8; color: white; border: 0; cursor: pointer; }
        footer { background: #172554; color: white; padding: 25px 8%; }
    </style>
</head>
<body>
<header>
    <h1>НОВОСТИ 24</h1>
    <nav>
        <a href="/">Главная</a>
        <a href="/category">Категория</a>
        <a href="/journalist">Журналист</a>
        <a href="/admin">Админ</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>© 2026 Новости 24</footer>
</body>
</html>
