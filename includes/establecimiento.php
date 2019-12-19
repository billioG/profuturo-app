<?php 
include("menu.php") ;
?>
  <!--Content-->
   <div class="wrapper main">
        <div class="row">
            <form class="col s12">
                <div class="row center-align deep-orange-text text-accent-4">
                    <strong><h5>Registro de establecimiento</h5></strong>   
                </div>
                <div class="row">
                        <!--Código-->
                    <div class="input-field col s12 m6">
                        <input placeholder="0405-02-03" id="codigo" type="text" class="validate">
                        <label for="codigo">Código de establecimiento</label>
                    </div>
                    <!--Nombre establecimiento-->
                    <div class="input-field col s12 m6">
                        <input placeholder="EORM, Santa Ana" id="nombre_establecimiento" type="text" class="validate">
                        <label for="nombre_establecimiento">Nombre del establecimiento</label>
                    </div>
                    <!--Dirección-->
                    <div class="input-field col s12 m6">
                        <input placeholder="Aldea Santo Tomás" id="direccion" type="text" class="validate">
                        <label for="direccion">Dirección del establecimiento</label>
                    </div>
                    
                    <!--Departamento-->
                    <div class="input-field col s12 m6">
                        <select>
                            <option value="" disabled selected id="departamento">Seleccione departamento</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label for="departamento">Departamento</label>
                    </div>
                    
                    <!--Latitud-->
                    <div class="input-field col s12 m6">
                        <input placeholder="Latitud" id="latitud" type="text" class="validate">
                        <label for="latitud">Latitud</label>
                    </div>
                    <!--Longitud-->
                    <div class="input-field col s12 m6">
                        <input placeholder="Longitud" id="longitud" type="text" class="validate">
                        <label for="longitud">Longitud</label>
                    </div>
                    <!--Teléfono-->
                    <div class="input-field col s12 m6">
                    <input placeholder="76564398" id="telefono" type="text" class="validate">
                    <label for="telefono">Teléfono del establecimiento</label>
                </div>
                
                <!--Cantidad alumnos-->
                <div class="input-field col s12 m6">
                    <input placeholder="150" id="cantidad_alumnos" type="text" class="validate">
                    <label for="cantidad_alumnos">Cantidad de alumnos</label>
                </div>
                    <!--Correo-->
                    <div class="input-field col s12 m6">
                        <input placeholder="micorreo@correo.com" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Ingrese correctamente su correo" data-success="Correo correcto"></span>
                    </div>
                </div>
                <div class="row center-align">
                    <div class="col l12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar datos
                        <i class="material-icons right">send</i>
                        </button>
                    </div> 
                </div>
            </form>
        </div>
    </div>

<?php 
include("footer.php") ;
?>