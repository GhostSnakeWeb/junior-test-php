<?php 

require 'libs/rb-mysql.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test-task');

R::setup('mysql:host='. DB_HOST .';dbname='. DB_NAME, DB_USER, DB_PASSWORD);

?>