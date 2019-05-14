<?php 

// Удаление
if (@$_GET['action'] == 'delete') {
	$userToDelete = R::load('users', $_GET['id']);
	R::trash($userToDelete);
	header('Location: index.php?result=deleteUser');
}

?>