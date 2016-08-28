<?php
	session_start();
	

	if(!empty($_POST['senhaLonga'])){
		//nao tenho acesso a banco de dados no meu free hosting
		//a senha da versao publicada eh outra
		if ( $_POST['senhaLonga'] == fullmetaldn123456789) {
			$_SESSION["eadmin"] = true;
			header("Location: ademar.php");
		}else{
			//irrelevante
			$_SESSION["eadmin"] = false;
			header("Location: index.php");
		}
	}

?>