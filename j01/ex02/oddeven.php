#!/usr/bin/php
<?
function get_nbr()
{
		echo "Entrez un nombre: ";
		$fd = fopen('php://stdin', 'r');
		if (($line = fgets($fd)) == NULL)
		{
			echo "\n";
			exit();
		}
		$var = trim($line, " \t\n");
		if (ctype_digit($var) == FALSE)
		 	echo "'$var' n'est pas un chiffre\n";
		else if ($var{strlen($var) - 1} % 2 == 0)
			echo "Le chiffre $var est Pair\n";
		else if ($var % 2 != 0)
			echo "Le chiffre $var est Impair\n";
		fclose($fd);
}
while (42)
	  get_nbr();
?>