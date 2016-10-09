<?php require_once "partials/header.view.php";?>

<form action="/addTask" method="post">
    <input type="text" name="title">
    <input type="submit">
</form>

<hr>
<form action="task-action" method="post">
<?php if(count($tasks)): ?>
    <select name="actions">
        <option value="done">Пометить как сделано</option>
        <option value="delete">Удалить</option>
    </select>
    <input type="submit" value="Выполнить">
    <ul>
    <?php foreach($tasks as $task): ?>
        <?php if($task->complete == 1): ?>
            <li class="complete"><input checked="cheked" type="checkbox" name="task_ids[]" value="<?= $task->id ?>"><?= $task->title ?></li>
        <?php else: ?>
            <li><input type="checkbox" name="task_ids[]" value="<?= $task->id ?>"><?= $task->title ?></li>
        <?php endif ?>
    <?php endforeach; ?>
    </ul>
<?php endif ?>
</form>

<?php require_once "partials/bottom.view.php";?>
