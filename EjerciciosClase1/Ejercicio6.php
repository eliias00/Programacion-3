<?php

$array=array();
$promedio=0;
$result;
for ($i=0; $i < 5 ; $i++)
{ 
	$array[$i] = rand(1,10);
    $promedio+=$array[$i];
}
$result = $promedio/5;
if ($result > 6) 
{
	echo "El promedio es mayor ";
}else if ($result < 6) 
{
	echo "El promedio es menor ";
}
else
{
	echo "El promedio es igual ";
}
?>