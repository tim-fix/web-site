<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Комментарий</th>
            <th>Дата комментария</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->comment }}</td>
                <td>{{ $book->date_of_comment }}</td>
            </tr>
        @endforeach
    </tbody>
</table><br><br>
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

    <a href="./moderator">Модератор</a>
</body>
</html>