 <!--Content-->
 <div class="wrapper main">
    <div class="row">
        <form class="col s12">
            <div class="row center-align deep-orange-text text-accent-4">
                <strong><h5>Registro de Alumno</h5></strong>   
            </div>
            <div class="row">

                 <!--Código-->
                <div class="input-field col s12 m6">
                    <input placeholder="0405-02-03" id="codigo" type="text" class="validate">
                    <label for="codigo">Matrícula</label>
                </div>
                <!--Nombre-->
                <div class="input-field col s12 m6">
                    <input placeholder="Benito Ernesto" id="nombre_alumno" type="text" class="validate focus">
                    <label for="nombre_alumno">Nombres del alumno</label>
                </div>
                <!--Apellido-->
                <div class="input-field col s12 m6">
                    <input placeholder="Guzman Aguirre" id="apellido" type="text" class="validate">
                    <label for="apellido">Apellidos del alumno</label>
                </div>
                <!--Usuario-->
                <div class="input-field col s12 m6">
                    <input placeholder="benitoga" id="usuario" type="text" class="validate">
                    <label for="usuario">Usuario</label>
                </div>
                <!--Fecha Nacimiento-->
                <div class="input-field col s12 m6">
                    <input type="text" class="datepicker" id="nacimiento">
                    <label for="nacimiento">Fecha de nacimiento</label>
                </div>
                <!--Género-->
                <div class="input-field col s12 m6">
                    <select>
                        <option value="" disabled selected id="departamento">Género</option>
                        <option value="1">Femenino</option>
                        <option value="2">Masculino</option>
                    </select>
                    <label for="departamento">Género</label>
                </div> 
                <!--Grado-->
                <div class="input-field col s12 m6">
                    <input placeholder="Grado" id="grado" type="text" class="validate">
                    <label for="grado">Grado</label>
                </div>
                <!--Sección-->
                <div class="input-field col s12 m6">
                    <input placeholder="Sección" id="seccion" type="text" class="validate">
                    <label for="seccion">Sección</label>
                </div>
                <!--Correo-->
                <div class="input-field col s12 m6">
                    <input placeholder="micorreo@correo.com" id="correo" type="email" class="validate">
                    <label for="correo">Correo</label>
                    <!-- <span class="helper-text" data-error="Ingrese correctamente su correo" data-success="Correo correcto"></span> -->
                </div>
                <!--Establecimiento-->
                <div class="input-field col s12 m6">
                    <select>
                        <option value="" disabled selected id="establecimiento">Establecimiento</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label for="establecimiento">Establecimiento</label>
                </div>
                <!--Solución-->
                <div class="input-field col s12 m6">
                    <select>
                        <option value="" disabled selected id="solucion">Solución</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label for="solucion">Solución </label>
                </div>
            </div>

            <div class="row center-align">
                <div class="col s12 m6">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Registrar datos
                    <i class="material-icons right">send</i>
                  </button>

            </div>
        </form>
    </div>
</div>