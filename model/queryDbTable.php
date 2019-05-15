<?php 

// Проверяем чтобы в дате добавления была текущая дата 
$getNewUsers = "SELECT * FROM `users` WHERE DATE(addtime) = CURDATE()";
$newUsers = R::getAll($getNewUsers);

$valuesTable = [];
for ($i=0; $i < count($newUsers); $i++) {
	array_push($valuesTable, [$newUsers[$i]['addtime'], $newUsers[$i]['name'], $newUsers[$i]['secondname']]);
}


$range = 'Статистика!A2:C';
$responseTable = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $responseTable->getValues();

$body = new Google_Service_Sheets_ValueRange([
    'values' => $valuesTable
]);
$valueInputOption = array('valueInputOption' => 'RAW');
$params = [
    'valueInputOption' => $valueInputOption
];
$result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);


?>