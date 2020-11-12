<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'utils.php';
$config = require 'config.php';

return new QueryBuilder(Connection::make($config['database']));
