<?php

$notas;

for($i=1;$i<5;$i++){
	$notas[$i]=readline("digite a nota $i: ");
}

for($i=1;$i<5;$i++){
	echo " \nNota $i: $notas[$i]";
}
echo " \n";

?>