<?php

$errors = [];

if (isset($_POST['add-user'])) {
	if (trim($_POST['name']) == '') {
		$errors[] = 'Введите имя пользователя';
	}
	if (trim($_POST['secondname']) == '') {
		$errors[] = 'Введите фамилию пользователя';
	}
	if (empty($errors)) {
		$newUser = R::dispense('users');
		$newUser->name = htmlentities($_POST['name']);
		$newUser->secondname = htmlentities($_POST['secondname']);
		R::store($newUser);
		header('Location: index.php?result=addUser');
	}
}

?>