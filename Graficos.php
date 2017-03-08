<?php 
	class Graficos
	{

		function estilos($carpeta=null)
		{
			$salida="";

			$salida=" <link rel='stylesheet'  type='text/css' href='$carpeta/css/bootstrap.css'>
					 <script src='$carpeta/js/jquerymin.js'></script>
					 <script src='$carpeta/js/bootstrap.min.js'></script>";
			return $salida;		 
		}
		/**
		* Esta función se encarga de retornar el encabezado  para que sean impresos desde afuera.
		* El emcabezado debe estar presente en todos los archivos que muestren resultados al usuario. Es decir, en todas las secciones.
		*@param 		texto 		este es el texto que ira en el encabezado.
		*@return 		texto 		retorna el texto que ira en el encabezado.
		*/
		function encabezado($text)
		{
			$salida="";
			$salida="<div class='page-header'><h1>$text</h1></div>";
			return $salida;

	}
  	/**
		* Esta función se encarga de mostrar el squl que se esta ejecutando.		
		*@param 		texto 		este es el sql.
		*@return 		texto 		retorna el sql.
		*/
	 function imprimir($texto){

			 	include 'config.php';

			 	 if ($sn_pruebas=="s") {
			 	 	echo "<p class='bg-success' >".$texto."</p>";
			 	 	$this->crear_texto( "Sql: ".$texto, "Funciones_php_func_guardar_informacion" );
			 	 	
			 	 	
			 	 }
			 	 

			 	
			 	
			 }
    /**
		* Esta función se encarga de mostrar el squl que se esta ejecutando.		
		*@param 		texto 		este es el sql.
    *@param 		texto 		este es el nombre de documento.
		*@return 		texto 		retorna el sql y lo guarda en un documento de texto.
		*/
       
		  function crear_texto($cad,$nombre_archivo){
			include 'config.php';
			if( $sn_pruebas_log == "s" )
				{
					$archivo = fopen( $nombre_archivo.".txt", "w" ); //Esta instruccción crea el archivo.
					fwrite( $archivo, $cad.PHP_EOL );
					fclose( $archivo );	
				}
		}


		
	}




 ?>
