#!/usr/bin/php
<?php
$i = 1;
if ($argv[1])
{
		$array = array_filter(explode(" ", $argv[1]));
		$word = array_shift($array);
		echo implode(" ", $array);
		if ($array[0])
		{
		   echo " ";
		}
		if ($word != NULL)
				echo $word."\n";
}
?>