<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="company.css">
</head>
<?php
$oldimg=$_GET['foto']; //aqui llego desde la respuesta de salvar_upload() en metodosimg.php
           //es desde alli desde donde tengo que traer oldimg para pintarla y devolverlo para ejecutar funcion sustituir
/*echo("POST: ");
print_r($_POST);
echo("<br>");
echo("GET: ");
print_r($_GET);
echo("<br>");*/?>

<body>
 
<!-- pinto el formulario donde confirmo si sustituyo la imagen seleccionada por la subida. paso como parametros ocultos la imagen a sustituir y la funcion que se debe ejecutar si llegamos a metodosimg.php desede esta pagina. -->
<form action="metodosimg.php" method="post" name="formSustituir">
<input type="hidden" name="funcion" value="sustituir"> 
desea sustituir la imagen <img src="<?=$oldimg?>"> por la imagen <img src="images/nueva.gif">?

<input type="hidden" name="foriginal" value="<?=$oldimg?>">
<input type="submit" id="botonI" value="SUSTITUIR"><br><a href="guiimgupload.php"><button id="botonI">NO, volver a subir imagen</button></a>
</form>
</body>
</html>