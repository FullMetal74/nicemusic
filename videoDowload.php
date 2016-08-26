<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Nice Music</title>
</head>
<body>

	<div>
		<center>
			<br>
			<h1>Nice Music</h1>
			<br>
			<?php

				if( !empty($_POST["urlvideo"]) ){
					$url = $_POST["urlvideo"];



echo '

	<h1>Seu link para baixar:</h1>	

<iframe style="width:230px;height:60px;border:0;overflow:hidden;" scrolling="no" src="//www.youtubeinmp3.com/widget/button/?video='.$url.'" &color=#4863A0></iframe>
	<br>
	
	<a href="index.html" class="btn btn-default">converta mais um!</a>
	<br>
	<a href="http://go.ad2up.com/afu.php?id=707120" class="btn btn-default">Ajudar os desenvolvedores!!</a>
	<a href="http://cur.lv/10yfc1" class="btn btn-default">Donwload?!!</a>
	
	</div>
';

				}


			?>




		</center>
	</div>



</body>
</html>