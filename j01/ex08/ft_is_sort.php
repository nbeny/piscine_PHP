<?PHP
function ft_is_sort($tab)
{
		$array = $tab;
		sort($array);
		if (array_diff_assoc($tab, $array) == NULL)
				return true;
		else
				return false; 
}
?>