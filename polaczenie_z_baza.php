<?php

if(!defined('INCLUDE_CHECK')) die('Nie masz uprawnień do używania tego pliku');


/* konfiguracja bazy danych */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'ecart'; 




$link = mysql_connect($db_host,$db_user,$db_pass) or die('Nie można ustanowić połączenia z bazą danych');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>