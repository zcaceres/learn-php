 <?php

require 'core/bootstrap.php';
require 'core/Request.php';

require Router::load('routes.php')
 -> direct(Request::uri());