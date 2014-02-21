
<!-- MENU PRINCIPAL 
================================================== -->
<?php include '../includes/menu_principal.php'; ?>

<!-- THEME PUBLICAR
================================================== -->
<div id="tm-publicar">
    
    <!-- HEADER PUBLICAR  
    ================================================== -->
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-text-center">
            <div class="uk-width-medium-2-6 uk-push-4-6">Login <br/> Nombre de la Pag. </div>
        </div>
    </div>
    
    <!-- PUBLICAR PROPIEDAD  PASO 1
    ================================================== -->
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h2>Publicar Propiedad</h2>
                <!--Intro-->
                <span class="paso_prog">Paso 1 de 3</span>
                <h3 class="paso_prog_tit">Datos de la Propiedad</h3>
                <h3 class="titPP">1.1 Titulo de la Propiedad</h3>
                <input type="text" placeholder="..............................." class="uk-form-blank">
            </div>
        </div>
        <div id="paso1" class="uk-grid data-uk-grid-margin">
             <!--Publicar Prop-->
             <div id="tm-publicar-left"class="uk-width-medium-1-3">
                 <div><h3 class="titPP">1.2 Referencias Básicas</h3>
                    <!-- Tipo de Inmueble-->
                        <div class="uk-form-row">
                            <label class="uk-form-label">Tipo de Inmueble</label>
                            <div class="uk-form-controls uk-width-1-1">
                                <select class="uk-width-1-1">
                                    <option>Casa</option>
                                    <option>Departamento</option>
                                    <option>Habitación</option>
                                    <option>Camping</option>
                                </select>
                            </div>
                        </div>
                    <!-- Zona -->
                       <div>
                         <label>Zona</label>
                         <div>
                           <select class="uk-width-1-1" id="zona" name="zona">
                             <option>opcion 1</option>
                             <option>opcion 2</option>
                           </select>
                         </div>
                       </div>
                       <!-- Cant. de Ambientes -->
                       <div>
                         <label>Cantidad de Ambientes</label>
                         <div>
                           <select class="uk-width-1-1" id="ambientes" name="ambientes">
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                             <option>4</option>
                             <option>o mas</option>
                           </select>
                         </div>
                       </div>
                  </div>

                    <div id="">
                        <h3 class="titPP">1.3. Comodidades</h3>
                        <!-- Comodidades -->
                       <div class="uk-grid data-uk-grid-margin " data-uk-button-checkbox="">
                            <button class="uk-button uk-width-medium-1-2" type="submit"><i class="uk-icon-laptop uk-icon-small"></i>Wi-fi</button>
                            <button class="uk-button uk-width-medium-1-2" type="submit"><i class="uk-icon-columns"> </i> Mascota</button>
                            <button class="uk-button uk-width-medium-1-2" type="submit"><i class="uk-icon-github-alt uk-icon-compass"> </i> Laundry</button>
                            <button class="uk-button uk-width-medium-1-2" type="submit">Cochera</button>
                            <button class="uk-button uk-width-medium-1-2" type="submit">Parrilla</button>
                            <button class="uk-button uk-width-medium-1-2" type="submit">Pileta</button>
                        </div>
                    </div>
             </div>

            <div class="uk-width-medium-2-3">                  
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h3 class="titPP">1.4.Ubicación</h3>
                    </div>
                    <div class="uk-width-1-1">
                        <h3 class="titPP">1.5.Descripción</h3>
                        <div class="uk-form uk-align-left">
                            <textarea cols="100%" rows="8" placeholder="" class="uk-width-large-1-1">...</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!--Btn-->
        <div class="uk-grid uk-text-center">
            <div class="uk-width-medium-2-6 uk-push-4-6"><button class="uk-button uk-button-large uk-button-primary uk-button-expand" type="reset">Siguiente Paso</button></div>
        </div>
    </div>
    <hr>
    <hr>

    <!-- PUBLICAR PROPIEDAD  PASO 2
    ================================================== -->
    <div class="uk-container uk-container-center">
    <h2>Publicar Propiedad</h2>
        <!--head-->
        <div class="uk-grid">
            <!--Intro-->
            <div class="uk-width-1-3">
                <span class="paso_prog">Paso 2 de 3</span>
                <h3 class="paso_prog_tit">Imágenes y Video para la propiedad.</h3>
            </div>
            <!--Pasos-->
         <!--      <div class="uk-width-medium-2-3">
            <div class="uk-progress">
                   <div  class="uk-progress-bar pasos" style="width: 60%;"> <span>Paso 2 de 3 </span><p>Imágenes y video.</p> </div>
               </div> 
            </div>-->
        </div>
        <!--Paso-->
        <div id="paso2" class="uk-grid">
            <!--Upload Imagenes -->
            <div class="uk-width-medium-2-3">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <dl class="uk-description-list uk-description-list-line">
                            <dt><h3 class="titPP">2.1.Subir Imágenes de la propiedad</h3></dt>
                         <dd><p>Una lista de descripción define los términos y sus descripciones correspondientes.</p></dd>
                        </dl>
                    </div>
                    <div id="imgs-upload" class="uk-width-1-1">
                        <div class="uk-grid">
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><input type="checkbox" id=""></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-4"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                                <ul class="uk-list">
                                    <li><i class="uk-icon-check"></i><a href="#" class="uk-close"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-clearfix"></div>
                    <p>Podés cargar hasta un máximo de 8 imágenes.</p>
                    <p><label>Subir Imágenes <input type="file"></label></p>
                </div>
            </div>
            <!--Upload Video -->
            <div class="uk-width-medium-1-3">
                 <dl class="uk-description-list uk-description-list-line">
                     <dt><h3 class="titPP">2.2.Subir video de la propiedad</h3></dt>
                    <dd><p>Una lista de descripción define los términos y sus descripciones correspondientes.</p></dd>
                </dl>
                <video width="100%" height="" poster="http://placehold.it/760x380/006f9b/ffffff&text=video" controls ></video>
                 <hr>
                 <p><label>Subir Video <input type="file"></label></p>
                 <div class="uk-clearfix"></div>
            </div>
        </div>
        <hr>
        <!--Btn-->
        <div class="uk-grid uk-text-center">
            <div class="uk-width-medium-2-6 uk-push-4-6"><button class="uk-button uk-button-large uk-button-primary uk-button-expand" type="reset">Siguiente Paso</button></div>
        </div>
    </div>
    <hr>
    <hr>
    <!-- PUBLICAR PROPIEDAD  PASO 3
    ================================================== -->
    <div class="uk-container uk-container-center">
        <h2>Publicar Propiedad - PASO 3</h2>
        <div class="uk-grid">
            <!--Intro-->
             <div class="uk-width-medium-1-3">
                <span class="paso_prog">Paso 3 de 3</span>
                <h3 class="paso_prog_tit">Precio y Disponibilidad.</h3>
            </div>
            <!--Pasos-->
            <div class="uk-width-medium-2-3">

            </div>
        </div>
        <div id="paso3" class="uk-grid">
            <!--Upload Imagenes -->
            <div class="uk-width-medium-1-3">
                <dl class="uk-description-list uk-description-list-line">
                    <dt><h3 class="titPP">3.1.Precio</h3></dt>
                    <dd><p>Una lista de descripción define los términos y sus descripciones correspondientes.</p></dd>
                </dl>
            </div>
            <!--Upload Video -->
            <div class="uk-width-medium-2-3">
                 <dl class="uk-description-list uk-description-list-line">
                     <dt><h3 class="titPP">3.2.Disponibilidad</h3></dt>
                    <dd><p>Una lista de descripción define los términos y sus descripciones correspondientes.</p></dd>
                </dl>
            </div>
            <button class="uk-button uk-button-large uk-button-primary uk-button-expand" type="reset">Finalizar publicación!</button>

        </div>
    </div>

</div>

 <!-- FOOTER
================================================== -->
 <?php include '../includes/footer.php'; ?>


