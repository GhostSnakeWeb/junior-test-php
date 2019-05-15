<?php

// Файлы подключения к БД и обработки
require 'db.php';

// Подключение Гугл API
require 'model/google-api.php';
require 'model/queryDbTable.php';


// Исполнение основного кода
require 'model/add-user.php';
require 'model/delete-user.php';
require 'model/all-users.php';


// Шаблон страницы
include 'view/index.tpl';

?>
