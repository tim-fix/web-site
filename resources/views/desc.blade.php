<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Объявление</th>
            <th>Описание</th>
            <th>Дата публикации</th>
        </tr>
    </thead>
    <tbody>
        @foreach($descs as $desc)
            <tr>
                <td>{{ $desc->id }}</td>
                <td>{{ $desc->name }}</td>
                <td>{{ $desc->comment }}</td>
                <td>{{ $desc->date_of_comment }}</td>
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
        <input type="text" name="name" placeholder="Название"><br><br>
        <input type="text" name="comment" placeholder="описание"><br><br>
        <button type="submit">отправить</button>
    </form>

    <a href="../first">Главная</a>
</body>
</html>