<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRD</title>
	<link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container pt-2">
		<?php include '_results.tpl'; ?>
		<h2 class="mb-3">Форма добавления</h2>
		<form class="mb-5" action="index.php" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Введите имя" name="name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Введите фамилию" name="secondname">
			</div>
			<button type="submit" name="add-user" class="btn btn-primary">Добавить пользователя</button>
		</form>

		<h2 class="mb-3">Таблица с пользователями</h2>
		<table class="table">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">ID</th>
					<th scope="col">Имя</th>
					<th scope="col">Фамилия</th>
					<th scope="col">Удалить</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) { ?>
					<tr class="text-center">
						<th scope="row"><?=$user['id']?></th>
						<td><?=$user['name']?></td>
						<td><?=$user['secondname']?></td>
						<td><a href="?action=delete&id=<?=$user->id?>" class="btn btn-outline-danger">Удалить</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>

