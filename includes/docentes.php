   <!--Content-->
   <div class="wrapper main">
    <div class="row">
        <form class="col s12">
            <div class="row center-align deep-orange-text text-accent-4">
                <strong><h5>Registro de docente</h5></strong>   
            </div>
            <div class="row">

                 <!--Código-->
                <div class="input-field col s12 m6">
                    <input placeholder="0405-02-03" id="codigo" type="text" class="validate">
                    <label for="codigo">No. de DPI</label>
                </div>
                <!--Nombre establecimiento-->
                <div class="input-field col s12 m6">
                    <input placeholder="223456720403" id="nombre_docente" type="text" class="validate">
                    <label for="nombre_docente">Nombre del docente</label>
                </div>
                <!--Dirección-->
                <div class="input-field col s12 m6">
                    <input placeholder="3ra. Calle 3-45 zona 3" id="direccion" type="text" class="validate">
                    <label for="direccion">Dirección del docente</label>
                </div>
                
                <!--Departamento-->
                <div class="input-field col s12 m6">
                    <select>
                      <option value="" disabled selected id="departamento">Departamento</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label for="departamento">Departamento</label>
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
                 <!--Teléfono-->
                <div class="input-field col s12 m6">
                    <input placeholder="76564398" id="telefono" type="text" class="validate">
                    <label for="telefono">Teléfono del docente</label>
                </div>

                <!--Correo-->
                <div class="input-field col s12 m6">
                    <input placeholder="micorreo@correo.com" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="Ingrese correctamente su correo" data-success="Correo correcto"></span>
                </div>
                <!--Establecimiento-->
                <div class="input-field col s12 m6">
                    <select>
                        <option value="" disabled selected id="departamento">Establecimiento</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label for="departamento">Establecimiento</label>
                </div>
                <!--Solución-->
                <div class="input-field col s12 m6">
                    <select>
                        <option value="" disabled selected id="departamento">Solución</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label for="departamento">Solución </label>
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