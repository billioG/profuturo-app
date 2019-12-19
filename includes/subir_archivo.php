<?php
require_once("../conexion/conexion.php");

 // $csv = explode(".",$archivo);
  // if($csv[1]<>"csv"){
  //   echo("Por favor elija un archivo con extensión CSV");
  // }else{
    $data=array();
    $fila = 0;
    $gestor = fopen($archivo_guardado, "r");
    while ($datos = fgetcsv($gestor, 1000, ";"))
    {
      if($fila!=1)
      {     
        $newDate= date('Y-m-d',strtotime($datos[5]));
        $import = "INSERT INTO alumnos (id_solucion,matricula,nombres,apellidos,usuario,nacimiento,genero,grado,seccion,correo,establecimiento,solucion) values ($datos[0],'$datos[1]','$datos[2]','$datos[3]','$datos[4]','$newDate','$datos[6]',$datos[7],'$datos[8]','$datos[9]','$datos[10]','$datos[11]')";
        mysqli_query($conexion, $import); 

      }
      $fila++;  
      
    }
      
    echo("Se importaron correctamente los datos");
    fclose($gestor);  
#  }

  // if (copy($archivo_copia,$archivo_guardado)){
  //   echo ("Se copió exitosamente el archivo");
  // }else{
  //   echo ("Se produjo un error al copiar el archivo");
  // }


?>