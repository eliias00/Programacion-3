<?php
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
	$hoy1 = date("F j, Y, g:i a");   
	$hoy2 = date("m.d.y");                        
	$hoy3 = date("j, n, Y");                    
	$hoy4 = date("Ymd");
	$mes = date("m");                          
	
	echo "fecha1: ", $hoy1 , "<br>";
	echo "fecha2: ", $hoy2, "<br>";
	echo "fecha3: ", $hoy3, "<br>";
	echo "fecha4: ", $hoy4, "<br>";
	 
	switch ($mes) {
		case '12':
		case '01':
		case '02':
		case '03':
		echo "Verano","<br>";
			break;
		case '04':
		case '05':
		case '06':
		echo "Otoño","<br>";
			break;
		case '07':
		case '08':
		case '09':
		echo "Invierno","<br>";
			break;
		case '10':
		case '11':
		echo "Primavera","<br>";
			break;
	}

?>