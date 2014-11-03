<?php

if(!defined('INCLUDE_CHECK')) die('Nie posaidasz uprawnień do wykonywania tego kaatlogu');


/* konfiguracja bazyd anych */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'internet_shop'; 




$link = mysql_connect($db_host,$db_user,$db_pass) or die('Nie można nawiązać połączenia z bazą');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>