#!/usr/bin/php
<?php
array_shift($argv);
$i = 0;
if ($argc > 1)
{
		$array = array_filter(explode(" ", $array[1]));
		while ($argv[$i])
		{
				$array2 = array_filter(explode(" ", $argv[$i]));
				$array = array_merge($array, $array2);
				$i++;
		}
		sort($array);
		if ($array[0] != NULL)
			echo implode("\n", $array)."\n";
}
?>