<!DOCTYPE html>
<head>
    <title>My view</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="comment" placeholder="comment"><br><br>
        <button type="submit">отправить</button>
    </form>
    <a href="../moderator">Модератор</a>
</body>
</html>