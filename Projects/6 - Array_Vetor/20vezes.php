<?php

$j = 20;

for($i=0;$i<20;$i++){
	$entrada[$i] = readline(" Digite ". $j-$i ." Numeros: ");
}

for($i=0;$i<20;$i++){
	echo "\n casa [".$j-$i."] conteudo : $entrada[$i] ";
}


?>