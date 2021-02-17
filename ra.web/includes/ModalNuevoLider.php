<div class="modal fade bd-nuevo-lider-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos del Lider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 text-center">
									<div class="alert alert-warning alert-dismissable" id="alert_valida_campos">
  										<strong>¡Atención!</strong> Es importante llenar todos los campos.
									</div>	
								</div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p>Atenco Independiente</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="for_seccion">Localidad:</label>
                  <select class="form-control" id="mdl_localidad" onchange="colocaCP(this.value);"> 
                    <!--<option selected value="0000">Seleccione</option>
                    <option value="Los Hornos (El Presidio)">Los Hornos (El Presidio)</option>
                    <option value="Colonia el Salado">Colonia el Salado</option>
                    <option value="La Amanal">La Amanal</option>
                    <option value="San Salvador Atenco">San Salvador Atenco</option>
                    <option value="San Cristóbal Nexquipayac">San Cristóbal Nexquipayac</option>
                    <option value="Santa Isabel Ixtapan">Santa Isabel Ixtapan</option>
                    <option value="Zapotlán">Zapotlán</option>
                    <option value="Francisco I. Madero">Francisco I. Madero</option>
                    <option value="Chileleco (Las Salinas)">Chileleco (Las Salinas)</option>
                    <option value="Nueva Santa Rosa">Nueva Santa Rosa</option>
                    <option value="Ejido de Nexquipayac">Ejido de Nexquipayac</option>
                    <option value=" Ejido San Salvador Acuexcomac (Ejido la Purísima)"> Ejido San Salvador Acuexcomac (Ejido la Purísima)</option>
                    <option value="La Pastoría">La Pastoría</option>
                    <option value="San Miguel Arcángel (Tepecingo)">San Miguel Arcángel (Tepecingo)</option>
                    <option value="Ejido San Cristóbal">Ejido San Cristóbal</option>
                    <option value=" Hacienda la Grande Fracción Uno">Hacienda la Grande Fracción Uno</option>
                    <option value="Santa María Hidalgo y Carrizo (Santa María Chimalhuacán)">Santa María Hidalgo y Carrizo (Santa María Chimalhuacán)</option>
                    <option value="Plantas de Tratamiento de Agua">Plantas de Tratamiento de Agua</option>
                    <option value="Granjas Ampliación Santa Rosa">Granjas Ampliación Santa Rosa</option>
                    <option value="Ejido la Magdalena Panoaya">Ejido la Magdalena Panoaya</option>-->
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
                <div class="col-md-4">
                  <label for="for_seccion">Sección:</label>
                  <select class="form-control" id="mdl_seccion"> 
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
                  </select>
                </div>
                <div class="col-md-2"></div>
              </div>
              <div class="row">
                <div class="col-md-12" align="center">Datos del Auxiliar:</div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_nombre">Nombre</label>
                    <input type="text" class="form-control" id="mdl_nombre_auxiliar">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_nombre">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="mdl_apaterno_auxiliar">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_nombre">Apellido Materno:</label>
                    <input type="text" class="form-control" id="mdl_amaterno_auxiliar">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_nombre">Nombre</label>
                    <input type="text" class="form-control" id="mdl_nombre">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_apaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="mdl_apaterno">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_amaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="mdl_amaterno">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="for_direccion">Dirección</label>
                    <textarea class="form-control" id="mdl_direccion" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_cp">Código Postal</label>
                    <input type="text" class="form-control" id="mdl_cp" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_tel_celular">Teléfono Celular</label>
                    <input type="number" class="form-control" id="mdl_tel_celular">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="for_tel_alterno">Teléfono Alterno</label>
                    <input type="number" class="form-control" id="mdl_tel_alterno">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="for_email">Email:</label>
                    <input type="email" class="form-control" id="mdl_email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="for_comnetarios">Comentarios:</label>
                    <textarea class="form-control" id="mdl_comentarios" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="btn_guardar_datos_afiliado">Guardar Datos</button>
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
            </div>
        </div>
    </div>
</div>
