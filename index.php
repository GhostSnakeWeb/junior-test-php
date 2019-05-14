<?php

// Файлы подключения к БД и обработки
require 'db.php';
require 'model/all-users.php';
require 'model/add-user.php';
require 'model/delete-user.php';



// Шаблон страницы
include 'view/index.tpl';

?>
