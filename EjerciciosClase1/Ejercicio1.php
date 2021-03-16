<?php
	$resultado=0;
	$j;
	
	for($i = 0; $resultado + $i <= 1000; $i++)
	{
		$resultado = $i + $resultado;
		$j=$i;
	}
	echo"numeros sumados: ", $j;
	echo "Se sumaron:", $resultado;
?>

