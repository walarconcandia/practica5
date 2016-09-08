<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  
  
  <!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->

</head>

<body>
<form method="post" action="ejercicio12-1.php">  <!--ojo redirecciona a la misma pagina -->
<?php
// primer dado
$total = "6"; // Numero total de imagenes
$extension = ".jpg";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta = "imgdado";//Carpeta con las imagenes
// De aqui para abajo no es necesario modificar nada
$start = "1";
$random = mt_rand($start, $total);// el mt rand es una funcion presstablecida de php que da resultados aleatorios
// EN ESTE CASO SERIA DE 1 A 6 YA QUE LE DIMOS ESOS PARAMETROS DE ENTRADA
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>


<?php
// segundo dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php
// tercer dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php
// cuarto dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php
// quinto dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>
<input type="submit" value="lanzar dados">

</form> 
</body>
</html>