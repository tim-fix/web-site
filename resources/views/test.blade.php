<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Флеш‑сообщение</title>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>Это страница, где отображаются флеш‑сообщения.</p>
        <a href="/set-flash">Снова установить флеш‑сообщение</a>
    </div>
</body>
</html>