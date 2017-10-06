#!/usr/bin/php
<?PHP
$numbers = array();
$alpha = array();
$symbols = array();
unset($argv[0]);
foreach ($argv as $str)
{
		$tmp = array_filter(explode(" ", $str));
		foreach ($tmp as $str2)
		{
				$tmp1 = ord($str2);
    			if($tmp1 > 47 && $tmp1 < 58)
				{
						$numbers[] = $str2;
    			}
    			else if(($tmp1 > 64 && $tmp1 < 91) || ($tmp1 > 96 && $tmp1 < 123))
				{
      				 	$alpha[] = $str2;
    			}
    			else if(($tmp1 > 32 && $tmp1 < 48) || ($tmp1 > 57 && $tmp1 < 65)
				|| ($tmp1 > 90 && $tmp1 < 97) || ($tmp1 > 122 && $tmp1 < 127))
				{
						$symbols[] = $str2;
    			}
  		};
}
sort($alpha);
foreach ($alpha as $s)
{
  echo "$s\n";
}
sort($numbers, SORT_STRING);
foreach ($numbers as $s1)
{
  echo "$s1\n";
}
sort($symbols);
foreach ($symbols as $s2)
{
  echo "$s2\n";
}
?>