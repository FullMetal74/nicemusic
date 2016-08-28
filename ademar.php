<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Nice Music</title>
	<meta name="propeller" content="a1b03fd5eb02bd0616752f0b05e58bb0" />
</head>
<body>

	<?php
		session_start();
		$ademar = $_SESSION["eadmin"];

		if ($ademar) {
			//coisas de adminstracao vao aqui
			echo "<center><h1>Admin panel v0.1</h1></center>";

			
//heredoc
echo <<< bloco
	
bloco;

		}else{
			header('Location: index.php');
		}
	?>



</body>
</html>