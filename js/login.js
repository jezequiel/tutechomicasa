var particular = {
    
    init: function(){
        particular.load();
    },
    
    load: function() {
    	console.log("Load login.js")
    	$('#login').click( function() {
    		if (particular.validarLogin()) {
    			$('#formLogin').submit();
    		}
    	});
    },
    
    validarLogin: function() {
    	return true;
    }
    
}