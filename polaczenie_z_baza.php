<?php

if(!defined('INCLUDE_CHECK')) die('Nie masz uprawnie� do u�ywania tego pliku');


/* konfiguracja bazy danych */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'olender'; 




$link = mysql_connect($db_host,$db_user,$db_pass) or die('Nie mo�na ustanowi� po��czenia z baz� danych');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>