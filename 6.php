<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
	<!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->

</head>

<body>



	<!--PRIMERA FORMA-->


<?php 
$rows = array(
array(  'nombre' => 'Antonio', 'apellidos' => 'Gómez Gómez', 'telefono' => '675832145'),
array('nombre' => 'Pedro', 'apellidos' => 'Guillén Gastón', 'telefono' => '674562178'),
array('nombre' => 'Dolores', 'apellidos' => 'Candela Quema', 'telefono' => '689765432'),
array('nombre' => 'Rubén', 'apellidos' => 'Guardia Jurado', 'telefono' => '654213896')
);
foreach($rows as $valor) {//RECORRE EL VECTOR $rows Y LO ASIGNA A LA VARIABLE $valor
echo 'NOMBRE: ' . $valor['nombre'] . '<br />'; //MUESTRA EL VALOR DE LA VARIABLE $VALOR
echo 'APELLIDOS: ' . $valor['apellidos'] . '<br />';
}
?>




	<!--SEGUNDA FORMA-->
<?php
$estacion[0] = "Primavera";
$estacion[1] = "Verano";
$estacion[2] = "Otoño";
$estacion[3] = "Invierno";
foreach($estacion as $valor) {   //RECORRE EL VECTOR $estacion Y LO ASIGNA A LA VARIABLE $valor
echo 'ESTACION: '. $valor.'<br/>';  //MUESTRA EL VALOR DE LA VARIABLE $VALOR
}
?>
</body>
</html>