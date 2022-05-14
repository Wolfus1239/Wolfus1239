<h2 class="h2-login">Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form class="form__auth" method="post">
        <label class="item-from-login">Логин <input type="text" name="login"></label>
        <label class="item-from-login">Пароль <input type="password" name="password"></label>
        <button class="item-from-login">Войти</button>
    </form>
<?php endif;
