<?php

define('INCLUDE_CHECK',1);
require "polaczenie_z_baza.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sklep internetowy w oparciu o technologie AJAX</title>

<link rel="stylesheet" type="text/css" href="css.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body>
<div id="main-zawartosc">

	<div class="sklepajax">
    <h1>Sklep internetowy</h1>
    <h3>zastosowanie technologii ajax</h3>
    </div>


    <div class="zawartosc">
    
    	<span class="top-label">
            <span class="label-txt">produkty</span>
        </span>

        
        <div class="obszar">
		
		 
        
    </div>
    <div class="obszar_cart">
				<span class="top-label">
            <span class="label-txt">Twój koszyk</span>
        </span> 
    		<div class="content drop-here">
            	<div id="cart-icon">
	            	<img src="img/koszyk.png" alt="Twój koszyk" class="pngfix" />
					<img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />
                </div>

				<form name="checkoutForm" method="post" action="order.php">
                
                <div id="item-list">
                </div>
                
				</form>                
                <div class="clear"></div>

				<div id="total"></div>

       	        <div class="clear"></div>
                
                <a href="" onclick="document.forms.checkoutForm.submit(); return false;" class="button">Zamówienie</a>
                
          </div>

        </div>
			<div class="bottom-zawartosc-border">
			</div>
    		<div class="content drag-desired">
                <?php

				$result = mysql_query("SELECT * FROM olender");
				while($row=mysql_fetch_assoc($result))
				{
					echo '<div class="product"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['opis']).'" width="128" height="128" class="pngfix" /></div>';
				}

				?>
        </div>
    </div>


</body>
</html>
