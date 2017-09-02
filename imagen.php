<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
/* la botonera es un array donde solo la pagina en la que estamos varia el vector añadiendo "_dn" al nombre de archivo y la extension .gif*/
 $botonera=array();
 $botonera[0]="images/btn_main";
 $botonera[1]="images/btn_about";
 $botonera[2]="images/btn_products";
 $botonera[3]="images/btn_services";
 $botonera[4]="images/btn_support";
 $botonera[5]="images/btn_contactus";
 $botonera[6]="images/btn_order";
 /* A la funcion pinta_botonera le paso como argumentos el array botones y la pagina de donde viene la peticion*/
function pinta_botonera($pagina,$botonera)
          {
			   for ($i=0;$i<7;$i++)
			      {
			       if ($pagina==$i)
				      {
			             $botonera[$i]=$botonera[$i]."_dn.gif";//cambio el boton normal por el "seleccionado" y añado la extension
			     }else{
				        $botonera[$i]=$botonera[$i].".gif";//añado la extension al resto de botones
			   }
		       echo("<a href='".$i.".php'><img class='boton' id='boton".$i."' src='".$botonera[$i]."'></a>");
            }
		  }
function  pinta_imagen($direccion)
        {
			echo("<img src='images/".$direccion.".gif'>");
			}
 ?>
<body>
</body>
</html>