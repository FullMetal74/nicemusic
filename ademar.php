<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Nice Music</title>
	<meta name="propeller" content="a1b03fd5eb02bd0616752f0b05e58bb0" />
</head>
<body>
<center>
	<?php
		session_start();
		$ademar = $_SESSION["eadmin"];

		if ($ademar) {
			//coisas de adminstracao vao aqui
			include("hitcounter.php");
			include("ipParaLugar.php");

			echo "<center><h1>Admin panel v0.1</h1></center>";
			echo "<center><h1>Um total de ".mostraContador()." acessos.</h1></center>";
			

			$arquivo = fopen( "listaBaixada.txt", "r" ) or die("meh");
		
			while (!feof($arquivo)) {
				$linha = fgets($arquivo);
				$arai = explode(' # ', $linha);
				echo "===> <a href=" .$arai[0].">ver</a> baixado as ".$arai[1]." de ". retPaisCity($arai[2]) ."   <br>";

			}
		


//heredoc
echo <<< bloco
	
bloco;

		}else{
			header('Location: index.php');
		}
	?>

</center>

</body>
</html>