<?php  
//Novedades - Noticias del mundo inmobiliario 
?>

 
 <div class="uk-grid">
     
    <!-- NOTICIAS DEL MERCADO-->
    <div id="noticias-mercado" class="uk-width-medium-2-3">
        <div class="uk-grid">
            <div class="uk-width-large-1-1">
                <div id="titNM"> <h2>Más noticias</h2></div>
                <!--Más noticias -->
                <dl class="uk-description-list uk-description-list-line">
                    <dd>
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-5 mnoticias"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt=""></div>
                            <div class="uk-width-medium-4-5 mnoticias"> <span class="tit-noticias-mercado">Noticia 1</span> <p class="uk-clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud. </p></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-5 mnoticias"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt=""></div>
                            <div class="uk-width-medium-4-5 mnoticias"> <span class="tit-noticias-mercado">Noticia 2</span> <p class="uk-clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud. </p></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-5 mnoticias"><img class="uk-align-left" src="http://placehold.it/760x380/6ccaf1/ffffff" alt=""></div>
                            <div class="uk-width-medium-4-5 mnoticias"> <span class="tit-noticias-mercado">Noticia 3</span> <p class="uk-clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud. </p></div>
                        </div>
                    </dd>
                </dl>
            </div>
            <div id="paginacion-noticias-mercado"class="uk-width-large-1-1">
                <!--pagination -->
                <ul class="uk-pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span>7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">19</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--SIDEBAR -->
    <div id="noticias-sidebar" class="uk-width-medium-1-3">
        <!--buscadorDeNoticias -->
        <div id="noticias-buscador" class="uk-width-large-1-1">
             <form class="uk-search">
                <input class="uk-search-field" type="search" placeholder="Buscar noticias ...">
                <button class="uk-search-close" type="reset"></button>
             </form>
        </div>
        <!--banner -->
        <div id="noticias-banner" class="uk-width-large-1-1">
            <div class="uk-panel" id="n-banner">banner</div>
        </div>

        <!--redesSociales -->
        <div id="noticias-rsociales" class="uk-width-large-1-1">
            <ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
                <li class="uk-active"><a href="#">Más visto</a></li>
                <li><a href="#">Más comentado</a></li>
                <li><a href="#">Consejos</a></li>
            </ul>
            <ul id="tab-content" class="uk-switcher uk-margin">
                <li class="uk-active">
                    <ul><li>1.Esta buensimo</li><li>2.Pinamar se prende fuegoo!</li><li>3.A solo metros del mar</li></ul>
                </li>
                <li>
                    <ul><li>1.Es genial la pileta de...</li><li>2.La costa patagonica</li><li>3.Cuidado con los robos</li></ul>
                </li>
                <li>
                    <ul><li>1.Esta buensimo</li><li>2.Pinamar se prende fuegoo!</li><li>3.A solo metros del mar</li></ul>
                </li>
            </ul>
        </div>
    </div>
</div>
