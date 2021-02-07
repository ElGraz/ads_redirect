<?php
$adurl = $_GET["adurl"];

if(!$adurl){
	$keys = array_keys($_GET);
	if(substr( $keys[0], 0, 4 ) === "http")
	{
		$adurl = $keys[0];
		$adurl = str_replace("_",".",$adurl);
		header ('Location: '.$adurl);
		return 0;
	}
}
if(!$adurl)
{
	print("<center><h1>Sorry, cannot do ☹</h1>(i'm working on it)</center>");
	return 0;
}
if (filter_var ($adurl, FILTER_VALIDATE_URL) !== FALSE	
	&& strpos ($adurl, 'google') === false)
{
	header ('Location: '.$adurl);
}
else
{
	print ($adurl);
	$dest = urldecode ($adurl);
	print_r ($_dest);
	$dest = parse_url ($dest);
	$dest = parse_url ($dest["query"]);
	#print_r($_dest);
	parse_str ($dest["path"], $res);
	#print_r($res);
	header ('Location: '.$res['ds_dest_url']);
}

?>
