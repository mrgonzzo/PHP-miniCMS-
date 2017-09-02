<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php


$filetexto=$_POST['archivo'];

 //function guardar()
 //{
  $ar=fopen($filetexto,"w+") or die("Problemas en la creacion");
  fputs($ar,$_POST['cajatexto']);
  fclose($ar);
  echo ("Los datos se cargaron correctamente.<br>El archivo ".$filetexto." ha cambiado compruebe el resultado volviendo a la pagina <a href='index.php'>Inicio</a> y navegando a la pagina deseada.");
 
	// }
 

?>
<body>

</body>
</html>