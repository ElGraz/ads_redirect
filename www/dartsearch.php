<?php
$dest = $_GET["adurl"];
if(!$dest)
{
	$dest = $_GET["ds_dest_url"];
}
if(!$dest)
{
	print("<center><h1>Sorry, cannot do</h1>(i'm working on it)</center>");
	return 0;
}
header ('Location: '.$dest);
?>
