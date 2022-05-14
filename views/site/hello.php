<?php

?>
<form class="hello-form" method="post">
    <div class="mb-3">
        <label for="exampleInput" class="form-label">Название или номер помещения</label>
        <input class="form-control" id="exampleInput">
    </div>
    <div class="mb-3">
        <label for="exampleInput" class="form-label">Вид помещения (аудитория, кабинет и т.п.)</label>
        <input class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInput" class="form-label">Площадь</label>
        <input class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInput" class="form-label">Название, вид подразделения</label>
        <input class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
    <a class="btn btn-primary" href="<?= app()->route->getUrl('/rooms') ?>">Показать помещения</a>
</form>
