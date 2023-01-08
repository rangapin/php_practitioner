<?php 

$app = [];

$app['config'] - require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php.php';
require 'core/database/QueryBuilder.php.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database.php'])
);
