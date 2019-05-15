<?php 

// Google API Block
require_once 'vendor/autoload.php'; // зависимости

// Путь к файлу ключа сервисного аккаунта
$googleAccountKeyFilePath = __DIR__ . '/../libs/secret_key.json';
putenv( 'GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath );

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
 
// Области, к которым будет доступ
$client->addScope( 'https://www.googleapis.com/auth/spreadsheets' );
$service = new Google_Service_Sheets($client);
 
// ID таблицы
$spreadsheetId = '1VWdTnOXT4VQtrR4Y7KH3IcR3Gc6eiNTCWEuHyCdX0UY';

?>