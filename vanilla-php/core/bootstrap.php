<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Router.php';
require 'utils.php';

$app = [];

$app['config'] = require 'config.php';

$app['db'] = new QueryBuilder(Connection::make($app['config']['database']));
