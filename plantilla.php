<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="company.css">
</head>
<!-- declarar aqui las globales, dar valor a las mismas en cada pagina e incluir este archivo en la generacion de capa (imagen.php para los botones) y de ahi cojer solo las variables-->
<?php

//global , estas variables se inicializan en cada pagina
global $texto_pagina;
global $texto_slogan;
global $imagen_area;
global $imagen_logo;
global $pagina;
global $texto_header;
global $texto_subheader;
//incluimpos el doc donde estan definidas las funciones necesarias (pinta_imagen() y pinta_botonera())
include("metodosimg.php");
//header("location:plantilla.php");
?>
<!--Ahora pintamos el html que es igual en todas las paginas, salvo los contenidos de las capas, que defino con php -->
<body>
<!-- <div id="cabecera"> -->
<div id="company_name"><?=pinta_imagen($imagen_logo) ?></div>
<div id="company_slogan"><p id="companyslogan"><?= include($texto_slogan)?></p></div>
<div id="botonera"><?php pinta_botonera($pagina,$botonera)?></div>
<!-- </div>-->
<div id="cuerpo"><div id="image_area"><?=pinta_imagen($imagen_area)?></div><p id="page_header"><?php include($texto_header)?></p><p id="sub_h"><?php include($texto_subheader)?></p><p id="textopagina"><?php include($texto_pagina); ?></p>
<br>
<a href="administracion.php"><button id="botonA"> ADMINISTRACION</button></a></div>
</body>
</html>