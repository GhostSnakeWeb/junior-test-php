<?php if (@$_GET['result'] == 'addUser') { ?>
	<div class="alert alert-success" role="alert" data-notify-hide>
	  Пользователь успешно добавлен
	</div>
<?php } ?>

<?php if (@$_GET['result'] == 'deleteUser') { ?>
	<div class="alert alert-danger" role="alert" data-notify-hide>
	  Пользователь успешно удален
	</div>
<?php } ?>