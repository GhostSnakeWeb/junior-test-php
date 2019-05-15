<?php 

// Удаление
if (@$_GET['action'] == 'delete') {
	$userToDelete = R::load('users', $_GET['id']);
	$deletingTime = R::isoDateTime();

	$valuesTable = [
		[$deletingTime, $userToDelete->name, $userToDelete->secondname]
	];

	$range = 'Статистика!E2:G';
	$responseTable = $service->spreadsheets_values->get($spreadsheetId, $range);
	$values = $responseTable->getValues();
	for ($i=0; $i < count($values); $i++) { 
		$range = 'Статистика!E'. (count($values) + 2) .':G';
	}
	
	$body = new Google_Service_Sheets_ValueRange([
	    'values' => $valuesTable
	]);
	$valueInputOption = array('valueInputOption' => 'RAW');
	$params = [
	    'valueInputOption' => $valueInputOption
	];
	$result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);

	R::trash($userToDelete);
	header('Location: index.php?result=deleteUser');
}

?>