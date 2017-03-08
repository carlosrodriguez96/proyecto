<!--  
* /**
* Desarrollado por:
* Carlos Arturo rodriguez
* Jhon Jairo Salazar 
*/
 -->
<!DOCTYPE html>
<html lang="ES">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
	<title></title>
	<meta charset="utf-8">
	<?php 
		include 'class/BD.php'; //trae las funciones de la pagina BD.php
		$nuevo_obj=new BD();	// llama la clase BD
			echo $nuevo_obj->estilos("../clases/ejer1/bootstrap"); // trae la funcion estilos de la clase
	?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php  echo $nuevo_obj->encabezado("Hola....."); ?> 
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-3 col-lg-3 ">
				<div class="panel panel-default">
				  <div class="panel-body"  style="max-height: 10;overflow-y: scroll;">
				
				<?php 	
					echo $nuevo_obj->traer_informacion("sintoma","tb_sintomas","id_sintomas","sintoma","get","ver.php"); // trae la información a mostrar.
				?>
				  </div>
				 </div>
			</div>	
			<div class="col-xs-12 col-md-3 col-lg-5 ">
			<?php
				echo $nuevo_obj->leer_campo( $nuevo_obj->consultar_tablas("tb_enfermedades.enfermedad","distinct"),"<th>Enfermedades</th>"); //lee y consulta las tablas.
				

			 ?>
			</div>
		</div>
	</div>
</body>
</html>

