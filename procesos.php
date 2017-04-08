<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>EJERCICIO CON MATERIALIZE </title>
	
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"> </script>
	<script type="text/javascript" src="js/misfunciones.js"></script>


</head>
<body >

<?php
/*
	echo "Esta es una prueba en PHP";
		for($i=0; $i<10; $i++){
			echo "<h1> Hola MUNDO </h1>";
		}

		$nombres = $_POST["pr_nombre_estu"]." ".$_POST["sg_nombre_estu"];
		$apellidos = $_POST["pr_apellido_estu"]." ".$_POST["sg_apellido_estu"];
		
		echo $nombres." ";
		echo $apellidos;

*/
	$nombres = $_POST["pr_nombre_estu"]." ".$_POST["sg_nombre_estu"];
	$apellidos = $_POST["pr_apellido_estu"]." ".$_POST["sg_apellido_estu"];
	$tipo_doc = $_POST["group1"];
		
	$file=fopen("archivo.txt", "a");
	fwrite($file, $nombres.";".$apellidos.";".$tipo_doc.PHP_EOL);
	fclose($file);
	
	echo $nombres." ";
	echo $apellidos." ";
	echo $tipo_doc;
		
	$file=fopen("archivo.txt", "r");

	while (!feof($file)) {
		if(fgets($file)!= ''){
		$x=explode(";", fgets($file)); // explode: extrae cada item o linea de texto por puntos y comas
                                   // fgets : obtiene una linea de las cadenas de texto
		?>
		<div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">
              	<?= $x[0]."".$x[1]?>
              </span>
              <p>
              	<?= "Tipo de documento: ".$x[2]?>
              </p>
            </div>
            <div class="card-action">
              
            </div>
          </div>
        </div>
      </div>
      <?php
      }
	}
    
	fclose($file);
	
	


?>

</body>


