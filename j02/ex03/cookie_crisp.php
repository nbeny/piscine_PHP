<?php
$day = *24*3600;

if ($_GET["action"] == "set")
{
	if ($_COOKIE["name"] !== "")
		setcookie($_GET["name"], $_GET["value"], time() + $day);
}
if ($_GET["action"] == "get")
{
	if($_COOKIE[$_GET['name']])
		echo $_COOKIE[$_GET['name']] ."\n";
}
if ($_GET["action"] == "del")
	setcookie($_GET["name"], $_COOKIE["value"], time() - $day);
?>