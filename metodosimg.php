<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
//PINTAR IMAGENES EN LA PLANTILLA
//BOTONERA
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
						 //cambio el boton normal por el "seleccionado" y añado la extension
			             $botonera[$i]=$botonera[$i]."_dn.gif";
			     }else{
				        //añado la extension al resto de botones
						$botonera[$i]=$botonera[$i].".gif";
			   }
		       echo("<a href='".$i.".php'><img class='boton' id='boton".$i."' src='".$botonera[$i]."'></a>");
            }
		  }
//LA IMAGEN DE LA PAGINA
function  pinta_imagen($direccion)
        {
			echo("<img src='images/".$direccion.".gif'>");
			}
			
//ADMINISTRACION
//Subir archivo
//preparamos la ruta destino del archivo subido.
// esta ruta la usamos en dos funciones, por lo que la declaramos fuera
$rutafile="images/nueva.gif";
//recuperamos el path de la imagen antigua que se quiere sustituir


function salvar_upload()
         {   //Recojo la ruta del archivo subido ahora en el dir temp del servidor
			$camino=$_FILES["imgfile"]["tmp_name"];
            // recojo el nombre original por si necesito mostrarlo o algo
			$archivo=$_FILES["imgfile"]["name"];
			//compruebo si existe el archivo subido
			
			if ($camino=="") 
               {
			     echo("<br> La imagen no ha subido <br><a href='guiimgupload.php'>volver a intentar</a>");
		       }
			else {
				   print_r($_POST);
				   echo("<br>");
				   $rutafile="images/nueva.gif";
				    $anterior=$_POST['foriginal'];
		          //movemos el archivo de la ubicacion temporal del servidor a nuestra carpeta de archivos
                   move_uploaded_file($camino,$rutafile);
				  echo("el archivo ha sido recibido correctamente<br><a href='guiimgsustituir.php?foto=$anterior'>continuar</a>");
				 
				  }
			 }//fin de funcion salvar_upload

function sustituir_imagen()
        { 
		    
		   $anterior=$_POST['foriginal'];
			//pruebas abrimos los archivos que vamos a manipular con permisos de lectura y escritura
			  $fileHand= fopen($anterior, 'r+');
			  fclose($fileHand);
			$rutafile="images/nueva.gif";
			 $fileHand2 = fopen($rutafile, 'r+');
			  fclose($fileHand2);
		  //recuperamos el path de la imagen antigua que se quiere sustituir
		
		  //primera parte de la respuesta de esta pagina. es mentir, pero si lo hacemops tras el switch
		     //$anterior ya contiene la foto nueva
		  echo("La imagen <img src='$anterior'> ha sido sustituida"); 
		  //switch: seleccionamos la orden oportuna según el archivo a sustituir 
		  //case: rename copia el archivo subido en el archivo obsoleto, sustituyendolo y unlink borra el archivo subido ya copiado
		  switch ($anterior)
		         {
				   case "images/image0.gif": rename("images/nueva.gif","images/image0.gif");
					                          //unlink("images/nueva.gif");
											  $paginacomprobacion="0.php";
					                         break;
					case "images/image1.gif": rename("images/nueva.gif","images/image1.gif");
					                          $paginacomprobacion="1.php";
					                           
					                          //unlink("images/nueva.gif");
					                           break;
					case "images/image2.gif": rename("images/nueva.gif","images/image2.gif");
					                          $paginacomprobacion="2.php";
					                          //unlink("images/nueva.gif");
					                          break;
					case "images/image3.gif": rename("images/nueva.gif","images/image3.gif");
					                          $paginacomprobacion="3.php";
					                          //unlink("images/nueva.gif");
					                          break;
					case "images/image4.gif": rename("images/nueva.gif","images/image4.gif");
					                          $paginacomprobacion="4.php";
					                          //unlink("images/nueva.gif");
					                           break;
					case "images/image5.gif": rename("images/nueva.gif","images/image5.gif");
					                          $paginacomprobacion="5.php";
					                          //unlink("images/nueva.gif");
					                           break;
					case "images/image6.gif": rename("images/nueva.gif","images/image6.gif");
					                          $paginacomprobacion="6.php";
					                          //unlink("images/nueva.gif");
					                          break;
					case "images/image7.gif": rename("images/nueva.gif","images/image7.gif");
					                          //unlink("images/nueva.gif");
					                          break;
					case "images/image8.gif": rename("images/nueva.gif","images/image8.gif");
					                          $paginacomprobacion="index.php";
					                          //unlink("images/nueva.gif");
					                           break;
					case "images/toplogo.gif": rename("images/nueva.gif","images/toplogo.gif");
					                           
					                           $paginacomprobacion="index.php";
					                           //unlink("images/nueva.gif");
					                           break;
				  }//fin switch
			 echo(" por la imagen <img src='$anterior'><br>");
			 echo("compruebelo volviendo a la <a href='$paginacomprobacion'>pagina afectada</a>");
			}//fin funcion sustituir_imagen()
	
	if ($_POST){
	//respuesta de la pagina metodosimg.php al ser llamada desde guiimgX .
	//switch:seleccionamos la funcion elegida
	//case:
	switch ($_POST['funcion'])
	       {
			 case "salvar": salvar_upload();
			                break;
			 case "sustituir": sustituir_imagen();
			                   break;
			                
			   }
	}
	
		
/*
Array
(
    [nom_du_fichier] => Array
        (
            [name] => MiHermozaImage.jpg
            [type] => image/jpg
            [tmp_name] => ruta_completa_del_archivo_subido
            [error] => 0
            [size] => 1000
        )

) 
*/
?>



</body>
</html>

