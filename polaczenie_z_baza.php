<?php

if(!defined('INCLUDE_CHECK')) die('Nie masz uprawnieñ do u¿ywania tego pliku');


/* konfiguracja bazy danych */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'olender'; 




$link = mysql_connect($db_host,$db_user,$db_pass) or die('Nie mo¿na ustanowiæ po³¹czenia z baz¹ danych');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>