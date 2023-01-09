<?php 

$tasks = $app['database']->selectAll('names');

require 'views/index.view.php'

?>