<!--
* Desarrollado por:
* Carlos Arturo rodriguez
* Jhon Jairo Salazar
*/-->

<?php 

$valores            = "";
$caracter_separador = ",";
$total_campos=$_GET['contador'];
//echo $total_campos."<br>";
for( $i = 1; $i <= $total_campos; $i ++ )       

        {
                    if (isset($_GET['sintoma'.$i]))
                     {
            			$valores .= $_GET[ 'sintoma'.$i ].$caracter_separador;
            	 
         			 }
            
       }
       $valores = substr ($valores, 0,- 1);

        
        //echo $valores;
       include 'class/BD.php';
    $nuevo_obj=new BD();
      echo $nuevo_obj->estilos("bootstrap");
      echo $nuevo_obj->leer_campo( $nuevo_obj->consultar($valores)," <th>Enfermedad</th><th>Sintomas Seleccionados</th><th>Sintomas presentes en esta enfermedad</th>");

			 
?>
