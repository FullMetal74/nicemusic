<?php
function gravaUrlArquivo($url){
	
	include("hitcounter.php");
	$ip = pegaMeuIp();

	$date = date('Y/m/d H:i:s');
		
	$file = 'listaBaixada.txt';
	$current = file_get_contents($file);
	$current .= $url." # ".$date." # $ip \n";
	file_put_contents($file, $current);
}

?>