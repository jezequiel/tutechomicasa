var particular = {
    
    init: function(){
        particular.load();
    },
    
    load: function() {
    	$("#home-head").hide();
    	$("#tm-home-foot").hide();
    	$("#home-head").removeClass('hide');
    	$("#home-head").fadeIn(400, function() {
        	$("#tm-home-foot").removeClass('hide');
        	$("#tm-home-foot").fadeIn(400);
    	});
    	
    	
    	$("#buscarPropiedades").click(function() {
    		$("#tm-menuPrincipal").show(500);
    		$('html, body').animate({scrollTop: $("#tm-menuPrincipal").offset().top}, 2000);
    	});
    }
    
}



