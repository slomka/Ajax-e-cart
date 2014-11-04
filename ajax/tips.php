<?php

define('INCLUDE_CHECK',1);
require "../polaczenie_z_baza.php";

if(!$_POST['img']) die("Nie ma takiego produktu!");

$img=mysql_real_escape_string(end(explode('/',$_POST['img'])));

$row=mysql_fetch_assoc(mysql_query("SELECT * FROM ecart WHERE img='".$img."'"));

if(!$row) die("Nie ma takiego produktu!");

echo '<strong>'.$row['nazwa'].'</strong>

<p class="descr">'.$row['opis'].'</p>

<strong>Cena: '.$row['cena'].'zł</strong>
<small>Przeciągnij lub kliknij aby dodać produkt do zamówienia!</small>';
?>
