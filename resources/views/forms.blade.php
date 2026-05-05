<form action="/test/form" method="POST">
	@csrf
	<input type="text" name="name" placeholder="Имя">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="email" placeholder="Имейл">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
	<input type="submit">
</form>