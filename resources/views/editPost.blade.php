<!DOCTYPE html>
<head>
    <title>My view</title>
</head>
<body>
    <form action="" method="POST">
		@csrf
	<input name="title" value="{{ $posts->title }}">
	<input name="desc" value="{{ $posts->desc }}">
	<input name="date" value="{{ $posts->date }}">
	<textarea name="text">{{ $posts->text }}</textarea>
	<input name="submit" type="submit">
</form>
</body>
</html>