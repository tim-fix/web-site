<!DOCTYPE html>
<head>
    <title>My view</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="comment" placeholder="comment">
        <button type="submit">отправить</button>
    </form>
    variable one:{{$var1}} <br>
    variable two:{{$var2}} <br>

    <a href="./1">ссылка на 1 статью</a><br>
    <a href="./2">ссылка на 2 статью</a><br>
    <a href="../post/del/1">удалить 1 статью</a><br>
    <a href="../post/del/2">удалить 2 статью</a>
</body>
</html>