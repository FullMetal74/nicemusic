<?php

//dar um jeito de não contar minhas visitas
//bloqueio por ip fixo
function pegaMeuIp() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function atualizaContador(){
	$datei = fopen("contador.txt","r");
	$count = fgets($datei,1000);
	fclose($datei);
	$count=$count + 1 ;

	$datei = fopen("contador.txt","w");
	fwrite($datei, $count);
	fclose($datei);
}

function chamaContador(){
	//ip publico ufsm
	if ( !(pegaMeuIp() == '200.18.43.6') )
		atualizaContador();
	
}

function mostraContador(){
	$datei = fopen("contador.txt","r");
	$count = fgets($datei,1000);

	return $count;

}


?>