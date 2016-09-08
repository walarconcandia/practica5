<?php

$usuario=admin;
$pass=12345;

$u=$_POST['usr'];// RECURERA DATOS DEL FORMULARIO
$p=$_POST['pwd'];// RECURERA DATOS DEL FORMULARIO

    

// CUENTA EL NUMERO DE FILAS Q HAY, SI HAY UNA FILA QUIERE DECIR Q EL USUARIO SE ENCUENTRA EN LA BASE DE DATOS
// Y SI NO QUIERE DECIR QUE NO HAY NINGUN USUARIO 

if($usuario ==$u && $pass ==$p)

	{
		
				
			header("location:ejercicio10-2.php");//direcciona a pagina de bienvenida.php
				


	
	}
	else
	{
		
			header("location:ejercicio10.php");	//vuenve a la pagina de logueo	
    }
?>
