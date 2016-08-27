<?php
	if(!empty($_POST['senhaLonga']){
		if ( $_POST['senhaLonga'] == fullmetaldn123456789) {
			header("Location: ademar.php");
		}else{
			header("Location: index.php");
		}
	}

?>