<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="company.css">
</head>
<?php
//comprobamos y recogemos la imagen que se  va a sustituir
if ($_GET==true){
$foto="images/".$_GET['foto'].".gif";
echo($foto."<br>");
}else{echo("no hay foto<br>");}
?>
<body>
<?php /* echo($foto);
print_r($_POST);
echo("<br>");
print_r($_GET);
echo("<br>"); */ ?>
<!-- Pintamos la imagen a sustituir y el formulario para subir la nueva -->
<div><img src="<?=$foto?>"></div>
<form name="Formimg" enctype="multipart/form-data" action="metodosimg.php" method="post">
<!--<INPUT type=hidden name=MAX_FILE_SIZE  VALUE=200048>-->
<input type="hidden" value="<?=$foto?>" name="foriginal">
<input type="file" name="imgfile">
<input type="hidden" name="funcion" value="salvar">
<input type="submit" name="enviar" value="Aceptar">
</form>
</body>
</html>