<!DOCTYPE html>
<head>
    <title>My view</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="id" placeholder="id статьи">
        <button type="submit">отправить</button>
    </form>
    variable one:{{$var1}} <br>
    <a href="./getDeletedPost/{$var1}">удалить пост</a>
</body>
</html>