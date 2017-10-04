#!/usr/bin/php
<?php
if ($argv[1])
{
		$array = array_filter(explode(" ", $argv[1]));
		echo implode(" ", $array);
		if ($array[0] == '\0')
		   echo "\n";
}
?>