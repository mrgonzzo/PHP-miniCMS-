<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
//creamos la variable donde guardar el texto elegido
global $texto;
 
//comprobamos que se ha recogido el parametro 
if ($_GET==true){
	//y seleccionamos el archivo que lo contiene
	switch ($_GET['texto']){
		case "eslogan": $texto="textos/eslogan.txt" ;
                    break;
		case "header":$texto="textos/header.txt" ;
                    break;
		case "subheader":$texto="textos/subheader.txt" ;
                    break;
		case "index":$texto="textos/index.txt" ;
                    break;
		case "main": $texto="textos/main.txt" ;
                    break;
		case "order": $texto="textos/order.txt" ;
                    break;
		case "about": $texto="textos/about.txt" ;
                    break;
					
		case "products": $texto="textos/products.txt" ;
                    break;
		case "services": $texto="textos/services.txt" ;
                    break;
		case "support": $texto="textos/support.txt" ;
                    break;
		case "contact": $texto="textos/contact.txt" ;
                    break;
		
		}
	}else{
	      $texto="textos/default.txt";}
//Creamos la variable que se pintara en la caja de texto html
 $textocaja="";
 //abrimos el archivo
 $file=fopen($texto,"r");

 // lo leemos hasta el final y guardamos cada linea en el array $contenido o directamente en la variable $textocaja con la operacion de concatenacion por cada //linea que se lee del archivo, hasta que se llega a su fin,
  while(!feof($file))
       {
	     //$contenido[]=fgets($file);
		  $textocaja.=fgets($file);
        }
 //en esta pagina, hemos terminado con el archivo, asi que lo cerramos
 fclose($file);
 //con este codigo extendido, se pone de relieve que los archivos de texto son tratados como un array de lineas.
 //recorremos el array para guardarlo en $textocaja y pintarlo en el html
 /* $contador=0;
  foreach ($contenido as $valor)
		{ 
		 $contador=$contador+1;
		 $textocaja.=$valor;
		}*/
 
 
?>
<body>
<form name="editortxt" action="metodostxt.php" method="post">
<input type="text" style="visibility:hidden" name="archivo" value="<?= $texto ?>"><br>
<textarea rows="20" cols="80" name="cajatexto"> <?= $textocaja ?> </textarea><br>
<input type="reset" value="BORRAR"><input type="submit" value="GUARDAR CAMBIOS">
</form>
<?php echo($texto);?>
</body>
</html>