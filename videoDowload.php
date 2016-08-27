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
	
	<a href="index.html" class="btn btn-default">convert one more!</a>
	<br>
	<a href="http://go.ad2upapp.com/afu.php?id=751415" class="btn btn-default">help us!!</a>
	<a href="http://cur.lv/10yfc1" class="btn btn-default">Donwload?!!</a>
	
	</div>
';

				include("gravaInfo.php");
				gravaUrlArquivo();


				}


			?>



			<!--UberCPM.com BANNER 728x90 - DO NOT MODIFY-->
			<script type="text/javascript"><!--
			document.write('<s'+'cript type="text/javascript" src="//ubercpm.com/show.php?z=26&pl=25007&j=1&code='+new Date().getTime()+'"></s'+'cript>'); 
			// --></script>
			<!--UberCPM.com BANNER 728x90 - DO NOT MODIFY-->

		</center>
	</div>



</body>
</html>