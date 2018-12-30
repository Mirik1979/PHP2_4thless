<?
	require('config/init.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
	<div class="container">
		<div class="header">
		</div>
		<!--добавлены хлебные крошки 15.02.2018 -->
		<div class="menu">
			<span><a href="index.php">Главная</a></span>
			<span>Каталог</span>
			<span><a href="corzina.php">Моя корзина</a></span>
		</div>		 
	</div>
</header>
	<article>
		<div class="pics">
			<!--добавлены дополнительные превью 15.02.2018 -->
			<div><a href="index.html">Главная</a> / Каталог книг</div>
			<br>
			<?php 					
				$lim = 2 + $_SESSION['val'];	
				echo $lim;				
				$resdb = $condb->query("SELECT * FROM directory LIMIT $lim"); 				
				$result = $resdb->FETCHALL(PDO::FETCH_ASSOC);   
				foreach( $result  as  $arry )
				{
					$fileOriginal1 = $arry["path"] . $arry["file_name1"];    
            		$fileOriginal2 = $arry["path"] . $arry["file_name2"];  
            		$title = $arry["title"];    
            		$href = "sku.php?id=".$arry["id"];
            		echo '<div class="skus"><a href="'.$href.'" target="_blank"><img class="sImage" src="'.$fileOriginal1.'" alt="book"  title="'.$title.'"/></a></div>';
            		echo '<div class="skusadd"><a href="'.$href.'" target="_blank"><img class="sImageadd" src="'.$fileOriginal2.'" alt="book"  title="'.$title.'"/></a></div>';  
				}        		
			?>			
		</div>
	</article>
	<form name="comment" id="form"> 		
  		<p>
    	<!-- <input type="hidden" name="page_id" value="150" /> -->
    	<input type="submit" value="Показать еще"/>
  		</p>
	</form> 
<footer>
	<div class="footer"> 	
		<div class="social">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>			
		</div>	
		<div class="footer_text"><span>Все права защищены <sup>&copy;</sup></span></div>
	</div>
</footer>
</body>
</html>