<!-- THEME HOME HEAD
================================================== -->
<div id="tm-home-head">
    <!-- Home Slider-->
    <div id="home-slider"> 
        <img  src="../resources/back_home.jpg" alt="">
    </div>
    <!-- Home head-->
    <div id="home-head" class="hide" >
        
        <div class="uk-container uk-container-center">
            <div  class="uk-grid">
                <div class="uk-width-medium-2-3">
                    <div id="logo" class="">            
                        <a class="uk-navbar-brand uk-hidden-small" href="#"><img class="uk-margin uk-margin-remove" src="../imgs/logo-ttmc.png" width="160" height="100" title="TTMC" alt="TTMC"></a>
                    </div>
                </div>
                <div id="home-menu" class="uk-width-medium-1-3">
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-1">
                            <form class="uk-search" data-uk-search>
                                <input id="buscar" class="uk-search-field" type="search" placeholder="">
                                <button class="uk-search-close" type="reset"></button>
                            </form>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <div class="uk-grid">
                                <div class="uk-width-1-2">
                                    <ul>
                                        <li><a href="login.php">Ingresar</a></li>
                                        <li><a href="registro.php">Registrarse</a></li>
                                        <li><a href="ayuda.php">Ayuda</a></li>
                                        <li><a href="#"><i class="uk-icon-facebook home-m-links-social"></i> </a><a href="#"><i class="uk-icon-twitter home-m-links-social"></i></a> <a href="#"> <i class="uk-icon-google-plus home-m-links-social"></i></a> </li>
                                    </ul>
                                </div>
                                <div id="home-m-tiempo"class="uk-width-1-2">
                                    <img  src="../imgs/tiempo.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--right/MENU-Home-->
            </div>
        </div>
    </div>
</div>

<!-- MENU PRINCIPAL 
    ================================================== -->
    <?php include 'includes/menu_principal.php'; ?>

<!-- THEME HOME FOOT 
================================================== -->
<div id="tm-home-foot" class="hide">
    
    <!-- Menu Login -->
    <div id="mlogin" class="uk-container uk-container-center hide">      
        <ul>
            <li><a href="login.php">Ingresar</a></li>
            <li><a href="registro.php">Registrarse</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
        </ul>
     </div>

    <!--Resultados de Busqueda-->
    <div class="uk-container uk-container-center">
        <h1 id="rb-head">Resultados de B&uacute;squeda</h1>
        
        <div class="uk-grid ">
             <!--  Contenedor/ Propiedad-->
            <div id="prop-cont" class="uk-width-medium-1-2">
                <div id="img-PrevProp" class="uk-width-medium-1-1 "><!-- Img.Prop -->
                    <div class="uk-overlay">
                        <img  src="../resources/dptos/ejemplo-prop.png" alt="">
                        <div class="uk-overlay-area"></div>
                    </div>
                </div>
                <div id="detalle-PrevProp" class="uk-width-medium-1-1"> <!-- Ficha/Detalles -->
                    <table class="uk-table uk-table-condensed ">
                        <thead>
                            <tr>
                                <th colspan="2"><h2 id="tit-PrevProp">Titulo de propiedad</h2></th>
                            </tr>
                        </thead>
                        <tbody>                                               
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Precio  </td>
                                <td class="uk-width-6-10 uk-text-right">$2.000</td>
                            </tr><tr>
                                <td class="uk-width-4-10 uk-text-bold"> Zona </td>
                                <td class="uk-width-6-10 uk-text-right"> Pinamar - Centro</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Distancia al mar</td>
                                <td class="uk-width-6-10 uk-text-right">400m.</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Cantidad personas  </td>
                                <td class="uk-width-6-10 uk-text-right">4</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Disponiblidad</td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 3</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>

           </div> 

             <div id="prop-cont" class="uk-width-medium-1-2">
                 <!--  Contenedor/ Propiedad-->
                 <div id="img-PrevProp" class="uk-width-medium-1-1 "><!-- Img.Prop -->
                    <div class="uk-overlay">
                        <img  src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                        <div class="uk-overlay-area"></div>
                    </div>
                </div>
                <div id="detalle-PrevProp" class="uk-width-medium-1-1"> <!-- Ficha/Detalles -->
                    <table class="uk-table uk-table-condensed ">
                        <thead>
                            <tr>
                                <th colspan="2"><h2 id="tit-PrevProp">Titulo de propiedad</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Zona </td>
                                <td class="uk-width-6-10 uk-text-right"> Pinamar - Centro</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 2 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 2</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 3 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 3</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Precio</td>
                                <td class="uk-width-6-10 uk-text-right">$</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>

        <div class="uk-grid data-uk-grid-margin">

            <div  id="prop-cont" class="uk-width-medium-1-3">
                <!--            Propiedad-->
                <div id="img-PrevProp" class="uk-width-medium-1-1 ">
                    <div class="uk-overlay">
                        <img  src="http://placehold.it/760x380/6ccaf1/ffffff" alt="">
                        <div class="uk-overlay-area"></div>
                    </div>
                </div>

                <div id="detalle-PrevProp" class="uk-width-medium-1-1">
                    <!-- Ficha de Previsualización de una propiedad -->
                    <table class="uk-table uk-table-condensed ">
                        <thead>
                            <tr>
                                <th colspan="2"><h2 id="tit-PrevProp">Titulo de propiedad</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Zona </td>
                                <td class="uk-width-6-10 uk-text-right"> Pinamar - Centro</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 2 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 2</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 3 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 3</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Precio</td>
                                <td class="uk-width-6-10 uk-text-right">$</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
            <div  id="prop-cont" class="uk-width-medium-1-3">
                <!--            Propiedad-->
                <div id="img-PrevProp" class="uk-width-medium-1-1 ">
                    <div class="uk-overlay">
                        <img  src="http://placehold.it/760x380/2BA3D4/ffffff" alt="">
                        <div class="uk-overlay-area"></div>
                    </div>
                </div>

                <div id="detalle-PrevProp" class="uk-width-medium-1-1">
                <!--            Propiedad-->                
                <table class="uk-table uk-table-condensed ">
                        <thead>
                            <tr>
                                <th colspan="2"><h2 id="tit-PrevProp">Titulo de propiedad</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Zona </td>
                                <td class="uk-width-6-10 uk-text-right"> Pinamar - Centro</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 2 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 2</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 3 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 3</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Precio</td>
                                <td class="uk-width-6-10 uk-text-right">$</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
            <div  id="prop-cont" class="uk-width-medium-1-3">
                <!--            Propiedad-->
                <div id="img-PrevProp" class="uk-width-medium-1-1 ">
                    <div class="uk-overlay">
                        <img  src="http://placehold.it/760x380/5ba0ff/ffffff" alt="">
                        <div class="uk-overlay-area"></div>
                    </div>
                </div>

                <div id="detalle-PrevProp" class="uk-width-medium-1-1">
                <!--            Propiedad-->                
                <table class="uk-table uk-table-condensed ">
                        <thead>
                            <tr>
                                <th colspan="2"><h2 id="tit-PrevProp">Titulo de propiedad</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Zona </td>
                                <td class="uk-width-6-10 uk-text-right"> Pinamar - Centro</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 2 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 2</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Caracteristica 3 </td>
                                <td class="uk-width-6-10 uk-text-right">Detalle 3</td>
                            </tr>
                            <tr>
                                <td class="uk-width-4-10 uk-text-bold"> Precio</td>
                                <td class="uk-width-6-10 uk-text-right">$</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>

</div>

 <!-- FOOTER
================================================== -->
 <?php include 'includes/footer.php'; ?>