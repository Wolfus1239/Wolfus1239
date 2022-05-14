<h2 class="h2-reg">Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form class="form__auth" method="post">
    <label class="item-from-login">Имя <input type="text" name="name"></label>
    <label class="item-from-login">Логин <input type="text" name="login"></label>
    <label class="item-from-login">Пароль <input type="password" name="password"></label>
    <button class="item-from-login">Зарегистрироваться</button>
</form>
