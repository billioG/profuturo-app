 <!--Content-->
 <div class="wrapper main">
    <div class="row">
        <form class="col s12">
            <div class="row center-align deep-orange-text text-accent-4">
                <strong><h5>Hoja de Visitas</h5></strong>   
            </div>
            <div class="row">
                <p>Por favor seleccione un archivo con formato PDF</p>
                <!--Archivo-->    
                <div class="file-field input-field">
                    <div class="btn">
                      <span>Seleccione archivo</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
                
                <!--Fecha inicio-->
                <div class="input-field col s12 m6">
                    <input type="text" class="datepicker" id="registro">
                    <label for="registro">Fecha Inicio </label>
                </div>
                <!--Fecha inicio-->
                <div class="input-field col s12 m6">
                    <input type="text" class="datepicker" id="registro">
                    <label for="registro">Fecha Fin </label>
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