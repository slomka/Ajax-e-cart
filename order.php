<?php

define('INCLUDE_CHECK',1);
require "polaczenie_z_baza.php";

if(!$_POST)
{
	if($_SERVER['HTTP_REFERER'])
	header('Location : '.$_SERVER['HTTP_REFERER']);
	
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Twoje zamówienie</title>

<link rel="stylesheet" type="text/css" href="css.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js.txt"></script>


<script type="text/javascript" src="script.js"></script>

</head>

<body>
<center>
<div id="main-zawartosc">

    <div class="zawartosc">
    
    	<span class="top-label">
            <span class="label-txt">Twoje zamówienie</span>
        </span>
        
        <div class="obszar">
    
    		<div class="content">
            	
                <?php
				
				$cnt = array();
				$products = array();
				$total = 0;
				
				foreach($_POST as $key=>$value)
				{
					$key=(int)str_replace('_cnt','',$key);
				
					$products[]=$key;
					$cnt[$key]=$value;
				}

				$result = mysql_query("SELECT * FROM olender WHERE id IN(".join($products,',').")");
				
				if(!mysql_num_rows($result))
				{
					echo '<h1>Wystąpił błąd z Twoim zamówieniem!</h1>';
				}
				else
				{
					echo '<h1>Twoje zamówienie:</h1>';
					
					while($row=mysql_fetch_assoc($result))
					{
						echo '<h2>'.$cnt[$row['id']].' x '.$row['nazwa'].'</h2>';
						
						$total+=$cnt[$row['id']]*$row['cena'];
					}
		
					echo '<h1>Całkowity koszt: '.$total.'zł</h1>';
				}
				?>
                
                
       	        <div class="clear"></div>
            </div>

        </div>
        
<table>
<form action="" method="post">
<tr>
  <td>Imię i Nazwisko:</td>
  <td><input type="text" name="imie_nazwisko"/></td>
</tr>
<tr>
  <td>Zamówiłeś:</td>
  <td><input type="text" name="zamowiono" value="" /></td>
</tr>
<tr>
  <td>Całkowity koszt:</td>
  <td><input type="text" name="koszt" value="" /></td>
</tr>
<tr>
  <td>E-Mail:</td>
  <td><input type="text" name="email"/></td>
</tr>

<tr>
  <td>Treść wiadomości:</td>
  <td><textarea name="wiadomosc"></textarea></td>
</tr>

<tr>
  <td>&nbsp;</td>
  <td><input type="submit" name="submit" value="Wyślij zamówienie"/></td>
</tr>
</form>
</table>

        <div class="bottom-zawartosc-border">
        </div>

    </div>

</div>
</center>
</body>
</html>
