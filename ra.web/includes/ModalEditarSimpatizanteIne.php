<div class="modal fade bd-editar-simpatizante-ine-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ediatar Datos del Simpatizante Ine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 text-center">
					<div class="alert alert-warning alert-dismissable" id="alert_valida_campos_editar_simpatizante_ine">
  						<strong>¡Atención!</strong> Es importante llenar todos los campos.
					</div>	
				</div>
              </div>
              <div class="row">
                <div class="col-md-12" align="center">
                  <p>Atenco Independiente</p>
                  <span id="span_simpine_id" style="display:none"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" align="center">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="mdl_editar_simpine_en_comite">
                    <label class="form-check-label" for="exampleCheck1">En comité</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="for_seccion">Padece alguna discapacidad:</label>
                  <div class="row">
                    <div class="col-md-6" align="center">
                      <input class="form-check-input" type="radio" name="mdl_editar_simpine_discapacidad" id="mdl_editar_simpine_discapacidad" value="Si">
                        <label class="form-check-label" for="mdl_editar_discapacidad1">
                          Si
                        </label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-check-input" type="radio" name="mdl_editar_simpine_discapacidad" id="mdl_editar_simpine_discapacidad" value="No" checked>
                        <label class="form-check-label" for="mdl_editar_discapacidad2">
                          No
                        </label>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-3" align="center">Datos del Directivo:</div>
                <div class="col-md-9">
                  <select class="form-control" id="mdl_editar_simpine_datos_directivo"> 
                    <!--<option selected value="0">Seleccione</option>-->
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-3" align="center">Datos del Lider:</div>
                <div class="col-md-9">
                  <select class="form-control" id="mdl_editar_simpine_datos_lider"> 
                    <!--<option selected value="0">Seleccione</option>-->
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-3" align="center">Datos del Coordinador:</div>
                <div class="col-md-9">
                  <select class="form-control" id="mdl_editar_simpine_datos_coordinador"> 
                    <!--<option selected value="0">Seleccione</option>-->
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="for_seccion">Localidad:</label>
                  <select class="form-control" id="mdl_editar_simpine_localidad" onchange="colocaCP(this.value,'EditarSimpatizanteIne');"> 
                    <option selected value="0000">Seleccione</option>
                    <option value="Ejidos de Cambray">Ejidos de Cambray</option> 
                    <option value="San Francisco Acuexcomac">San Francisco Acuexcomac</option> 
                    <option value="San Salvador Atenco">San Salvador Atenco</option> 
                    <option value="Santa Gertrudis">Santa Gertrudis</option> 
                    <option value="La Noria">La Noria</option> 
                    <option value="San Lazarito">San Lazarito</option> 
                    <option value="Ejidal San Salvador">Ejidal San Salvadorr</option> 
                    <option value="Hacienda la Grande Fracción Uno">Hacienda la Grande Fracción Uno</option> 
                    <option value="Zapotlán">Zapotlán</option> 
                    <option value="La Pastoría">La Pastoría</option> 
                    <option value="Francisco I Madero">Francisco I Madero</option> 
                    <option value="Ejido San Salvador Acuexcomac (Ejido la PurIsima)">Ejido San Salvador Acuexcomac (Ejido la PurIsima)</option> 
                    <option value="El Amanal">El Amanal</option> 
                    <option value="Ejido la Magdalena Panoaya">Ejido la Magdalena Panoaya</option> 
                    <option value="Ejido de San Cristóbal Nexquipayac">Ejido de San Cristóbal Nexquipayac</option> 
                    <option value="Los Hornos (El Presidio)">Los Hornos (El Presidio)</option> 
                    <option value="Nueva Santa Rosa">Nueva Santa Rosa</option> 
                    <option value="Nueva Santa Rosa-Granjas el Arenal">Nueva Santa Rosa-Granjas el Arenal</option> 
                    <option value="El Salado">El Salado</option> 
                    <option value="Santa Isabel Ixtapan">Santa Isabel Ixtapan</option> 
                    <option value="Nezahualcoyotl - Ixtapan">Nezahualcoyotl - Ixtapan</option> 
                    <option value="San Cristóbal Nexquipayac">San Cristóbal Nexquipayac</option> 
                    <option value="Granjas la Purísima">Granjas la Purísima</option> 
                    <option value="Las Salinas">Las Salinas</option> 
                    <option value="Benito Quezada">Benito Quezada</option> 
                    <option value="Chilileco">Chilileco</option> 
                    <option value="La Purisima-La Purisima Norte">La Purisima-La Purisima Norte</option> 
                  </select>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="for_cp">Código Postal</label>
                    <input type="text" class="form-control" id="mdl_editar_simpine_cp" disabled>
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="for_seccion">Sección:</label>
                    <input type="text" class="form-control" id="mdl_editar_simpine_seccion" disabled>
                    <!--<select class="form-control" id="mdl_editar_simp_seccion"> 
                    <option selected value="0000">Seleccione</option>
                    <option value="0233">0233</option>
                    <option value="0234">0234</option>
                    <option value="0235">0235</option>
                    <option value="0236">0236</option>
                    <option value="0237">0237</option>
                    <option value="0238">0238</option>
                    <option value="0239">0239</option>
                    <option value="0240">0240</option>
                    <option value="0241">0241</option>
                    <option value="0242">0242</option>
                    <option value="0243">0243</option>
                    <option value="0244">0244</option>
                    <option value="0245">0245</option>
                    <option value="0246">0246</option>
                  </select>-->
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_nombre">Nombre</label>
                    <input type="text" class="form-control" id="mdl_editar_simpine_nombre" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_apaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="mdl_editar_simpine_apaterno" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_amaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="mdl_editar_simpine_amaterno" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="for_direccion">Dirección</label>
                    <textarea class="form-control" id="mdl_editar_simpine_direccion" rows="3" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_tel_celular">Teléfono Celular</label>
                    <input type="number" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="mdl_editar_simpine_tel_celular">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_genero">Genero</label>
                    <select class="form-control" id="mdl_editar_simpine_genero"> 
                      <option selected value="0000">Seleccione</option>
                      <option value="Masculino">Masculino</option> 
                      <option value="Femenino">Femenino</option> 
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_edad">Edad</label>
                    <input type="number" maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="mdl_editar_simpine_edad">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="for_comnetarios">Comentarios:</label>
                    <textarea class="form-control" id="mdl_editar_simpine_comentarios" rows="3" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" disabled></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="btn_guardar_datos_editar_simpatizante_ine">Guardar Datos</button>
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
            </div>
        </div>
    </div>
</div>
