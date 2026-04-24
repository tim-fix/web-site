<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Комментарий</th>
            <th>Дата комментария</th>
            <th>Удаление записи</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->comment }}</td>
                <td>{{ $book->date_of_comment }}</td>
                <td><a href="./del/{{ $book->id }}">удалить</a><br><a href="./rew/{{ $book->id }}">редактировать</a></td>
            </tr>
        @endforeach
    </tbody>
</table><br><br>


<!DOCTYPE html>
<head>
    <title>My view</title>
</head>
<body>
    <a href="../book">Главная</a>
</body>
</html>