 <?php

require 'core/Task.php';

$tasks = $app['db']->selectAll("todos", 'Task');

require 'views/index.view.php';

