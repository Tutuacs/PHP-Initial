<?php

for($i = 0; $i < 4; $i++)
{

	echo "\n";
	$nota;
	$media = 0;

		for( $j = 1; $j <= 4; $j++)
		{
			echo "Digite a {$j}° nota: ";
			$nota = readline();
			$media = $media+$nota;
		}

	$media = $media/4;

	echo "\nA média é: $media\n";

}

?>