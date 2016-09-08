<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
	<!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->

</head>

<body>

<?php
// GESTORES DE DIRECTORIO opendir,readdir,closedir

if ($gestor = opendir('fotos'))		//ABRE EL GESTOR DE DIRECTORIO DE LA CARPETA FOTOS Y LO ALMACENA EN LA VARIABLE $GESTOR
{
 echo "<table border=1>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor)))  //Lee una entrada desde un gestor de directorio
 {
 		if ($archivo!="." && $archivo!="..")
 		{

 			if ($i==4)//DEERMINA  EL NUMERO DE COLUMNAS 
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=fotos/$archivo><img src=fotos/$archivo width='200px'> 
			</a>";// MUESTA LAS FOTOS EN SUS RESPECTIVAS CELDAS <td> ADEMAS Q REDIRECCIONA A LAS HACIENDO CLICK A LAS FOTOS REALES 
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);//closedir — Cierra un gestor de directorio
}
?>

</body>
</html>