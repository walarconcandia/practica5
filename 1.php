<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	<meta name="description" content="Mi sitio web" />
	
	<link rel="stylesheet" type="text/css" href="estilos.css" />





</head>

<body>
    

<?php
echo "<table border=1>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
 echo "<tr>";
 for ($n2=1; $n2<=10; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";
?>
        


</body>
</html>