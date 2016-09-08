<?php
//variables
$n1 =$_GET['txtn1'];//RECIBE LAS VARIABLES ENVIADAS MEDIANTE URL Y LAS ALMACENA EN $n1
$n2 =$_GET['txtn2'];//RECIBE LAS VARIABLES ENVIADAS MEDIANTE URL Y LAS ALMACENA EN $n2
$n3 =$_GET['txtn3'];//RECIBE LAS VARIABLES ENVIADAS MEDIANTE URL Y LAS ALMACENA EN $n3
 	$mayor =0;
 	$inter =0;
 	$menor =0;
	//if($n1>$n2){
	//	if($n1>$n3){
	//		$m=$n1;
		//}else{
		//	$m=$n3;
	//	}
//else{
	//	if ($n2>$n3) {
		//	$m=$n2;
		//}else{
		//	$m=$n3;
	//	}
	//}
//PROCESO PARA ENCONTRAR MAYOR MENOR E INTERMEDIO
if($n1>$n2 && $n1>$n3) {
	$mayor=$n1;
}else{
	if ($n2>$n1 && $n2>$n3) {
		$mayor=$n2;	
	}else{
		$mayor=$n3;
	}
}
if($n1<$n2 && $n1<$n3){
	$menor=$n1;
}else{
	if($n2<$n1 && $n2<$n3){
		$menor=$n2;
	}else{
		$menor=$n3;
	}
}
$inter=($n1+$n2+$n3)-($mayor+$menor);//LA SUMA Y LA DIFERENCIA DA COMO RESULTADO EL NUMERO INTERMEDIO


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
                                    
 </head>                                                                 
 <body>      
 <?php

echo "NUMERO1: "."$n1"."<br>";
echo "NUMERO2: "."$n2"."<br>";
echo "NUMERO3: "."$n3"."<br><BR>";
echo "el numero mayor es: "."$mayor"."<br>";// MUESTRA POR PANTALLA LOS RESULTADO OBTENIDOS
echo "el numero menor es: "."$menor"."<br>";
echo "el numero intermedio  es: "."$inter"."<br>";




?>
 </body>                                                                 
 </html>