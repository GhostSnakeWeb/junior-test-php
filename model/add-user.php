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
		$newUserName = htmlentities($_POST['name']);
		$newUserSecondname = htmlentities($_POST['secondname']);
		$addTime = R::isoDateTime();

		$newUser->name = $newUserName;
		$newUser->secondname = $newUserSecondname;
		$newUser->addtime = $addTime;

		R::store($newUser);
		header('Location: index.php?result=addUser');
	}
}

?>