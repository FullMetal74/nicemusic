<?php
function retPaisCity($ip)
{
	$local ="null";
	$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
	if($query && $query['status'] == 'success')
		$local = $query['country'].', '.$query['city'].'!';
	
	return $local;
}
?>