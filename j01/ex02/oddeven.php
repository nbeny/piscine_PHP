#!/usr/bin/php
<?PHP
while (42)
{
	if (feof(STDIN) === TRUE)
	{
		echo "^D\n";
		exit(1);
	}
	echo "Entrez un nombre: ";
	$ligne = fgets(STDIN);
	$ligne = trim($ligne, " \t\n\0\r\x0B");
	if (is_numeric($ligne) === TRUE && ($ligne % 2) === 0)
	      echo "le chiffre ".$ligne." est pair\n";
	else if (is_numeric($ligne) === TRUE && ($ligne % 1) === 0)
		  echo "le chiffre ".$ligne." est impair\n";
	else if (feof(STDIN) === FALSE)
		echo "'$ligne' n'est pas un chiffre\n";
}
?>