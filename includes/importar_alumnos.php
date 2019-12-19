<?php include("menu.php");
include("../conexion/conexion.php");

if(isset($_POST["enviar"]))
{
  $archivo = $_FILES["archivo"]["name"];
  $archivo_copia = $_FILES["archivo"]["tmp_name"];
  $archivo_guardado = "copia_".$archivo;

  if (copy($archivo_copia,$archivo_guardado)){
    echo ("Se copió exitosamente el archivo");
    $csv = explode(".",$archivo_guardado);
    if($csv[1]<>"csv"){
      echo("Por favor elija un archivo con extensión CSV");
    }else{
      $data=array();
      $fila = 0;
      $gestor = fopen($archivo_guardado, "r");
      while ($datos = fgetcsv($gestor, 0, ";"))
      {
        if($fila!=1)
        {     
          $newDate= date('Y-m-d',strtotime($datos[5]));
          $import = "INSERT INTO alumnos (id_solucion,matricula,nombres,apellidos,usuario,nacimiento,genero,grado,seccion,correo,establecimiento,solucion) values ($datos[0],'$datos[1]','$datos[2]','$datos[3]','$datos[4]','$newDate','$datos[6]',$datos[7],'$datos[8]','$datos[9]','$datos[10]','$datos[11]')";
          mysqli_query($conexion, $import); 
        
        }
         
      }
      $fila++; 
      echo("Se importaron correctamente los datos");
      fclose($gestor);
    }
  }else{
    echo ("Se produjo un error al copiar el archivo");
  }
}
?> 
 <!--Content-->
 <div class="wrapper main">
    <div class="row">
        <form class="col s12" action="importar_alumnos.php" method="POST" enctype="multipart/form-data">
            <div class="row center-align deep-orange-text text-accent-4">
                <strong><h5>Importar alumnos</h5></strong>   
            </div>
            <div class="row">
                <p>Por favor seleccione un archivo con formato CSV</p>
                <!--Archivo-->    
                <div class="file-field input-field">
                    <div class="btn">
                      <span>Seleccione archivo</span>
                      <input type="file" name="archivo">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
            <div class="row center-align">
                <div class="col s12 m6">
                    <button class="btn waves-effect waves-light" type="submit" name="enviar">Importar<i class="material-icons right">send</i>
                  </button>
            </div>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>