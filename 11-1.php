<?php
  $eq1=$_POST['eq1'];;
  $eq2=$_POST['eq2'];
  $eq3=$_POST['eq3'];
  $eq4=$_POST['eq4'];
  $eq5=$_POST['eq5'];
  $eq6=$_POST['eq6'];//recupera las variables 




$entrada = array("$eq1", "$eq2", "$eq3", "$eq4", "$eq5", "$eq6");// asigna las variables al array asociativo
$claves_aleatorias = array_rand($entrada, 3);



?>
<form action="ejercicio11.php">
<table width="258" border="0">
    <tr>
      <td><h1>fixture de partidos</h1></td>
      <td> </td>
    </tr>
    <tr>
      <td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td> <!--muestra los valores de los arraysaleatorios-->
      <td>vs</td>
      <td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
    </tr>
    <tr>
    <tr>
      <td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td>
      <td>vs</td>
      <td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
    </tr>
    <tr>
      <td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
      <td>vs</td>
      <td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
    </tr>


  </table>
  <input type="submit" value="atras">
</form>