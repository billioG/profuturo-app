   <!--Content-->
   <div class="wrapper main">
    <div class="row">
        <form class="col s12">
            <div class="row center-align deep-orange-text text-accent-4">
                <strong><h5>Registro de incidencias</h5></strong>   
            </div>
            <div class="row">
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
                <!--Dispositivo-->
                <div class="input-field col s12 m6">
                    <select>
                        <option value="" disabled selected id="dispositivo">Dispositivo</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label for="dispositivo">Dispositivo </label>
                </div>
                <!--Fecha registro-->
                <div class="input-field col s12 m6">
                    <input type="text" class="datepicker" id="registro">
                    <label for="registro">Fecha </label>
                </div>
                <!--Serie-->
                <div class="input-field col s12 m6">
                    <input placeholder="No. de serie" id="serie" type="text" class="validate">
                    <label for="serie">No. de Serie</label>
                </div>

                <!--Observaciones-->
                <div class="input-field col s12 m6">
                    <input placeholder="Describir razones por las que no se ha utilizado" id="observaciones" type="text" class="validate">
                    <label for="observaciones">Observaciones</label>
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