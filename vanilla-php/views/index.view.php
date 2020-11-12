<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            header {
                text-align: center;
                background: grey;
            }
        </style>
    </head>
    <body>
            <h1>Task for the Day</h1>

            <ul>
                <?php foreach($tasks as $task) : ?>
                    <li>
                        <strong>Title: </strong><?= $task->description; ?>
                        <?php if ($task->completed) : ?>
                            <span>√</span>
                        <?php else : ?>
                            <span>X</span>
                        <?php endif ?>
                    </li>
                <?php endforeach; ?>
            </ul>

    </body>
</html>
