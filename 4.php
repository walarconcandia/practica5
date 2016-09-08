<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />

 <?php
  //Creamos los parametros iniciales
 
  $filas = 9;
  $columnas = 9;
  $texto = 0;
  $grey = true;
  ?>                                                   
 </head>                                                                 
 <body>      
 

<table border="1">
 <?php
 //Iniciamos el bucle de las filas
 for($t=0;$t<$filas;$t++){
          echo "<tr>";
          //Iniciamos el bucle de las columnas
      for($y=0;$y<$columnas;$y++){
         if($grey){
              //Pintamos el cuadro
              echo "<td style=padding:3px;
                 bgcolor=#464A4B;>".$p."</td>";
              //El próximo no será pintado
              $grey=false;
				$p=pow($texto,2);
              $texto++;
         }
         else{
              //Dejamos cuadro en blanco
              echo "<td style=padding:3px;>".$p."</td>";
              //El próximo será pintado
             $p=pow($texto,2);
              $grey=true;
              $texto++;
          }
       }
       //Cerramos columna
       echo "</tr>";
  }
 ?>
 
 </table>
 </body>                                                                 
 </html>