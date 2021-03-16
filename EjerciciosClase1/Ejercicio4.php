<?php

$operador=0;
$op1 = rand(0,100);
$op2 = rand(0,100);
$resultado=0;

switch ($operador = rand(1,4))
 {
	case $operador = 1:
	 	$resultado = $op1 + $op2;
		echo "Suma: $op1 + $op2 = $resultado";
		break;

		case $operador = 2:
	 	$resultado = $op1 - $op2;
		echo "Resta: $op1 - $op2 = $resultado";
		break;

		case $operador = 3:
	 	$resultado = $op1 * $op2;
		echo "Multiplicacion: $op1 * $op2 = $resultado";
		break;

		case $operador = 4:
		if($op2 != 0)
			{
				$resultado = $op1 / $op2;
				echo "Division: $op1 / $op2 = $resultado";
			}
			else
				{
				
				echo "No se puede dividir por 0";
			}

		break;	
}
?>