(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		  
                  $( "#accordion" ).accordion();
                  $( "#accordion2" ).accordion();
                  $( "#accordion3" ).accordion();
                  $("#accordion").accordion({ header: "h3", collapsible: true, active: false });
                  $("#accordion2").accordion({ header: "h3", collapsible: true, active: false });
                  $("#accordion3").accordion({ header: "h3", collapsible: true, active: false });
                  
                  
                  
	});
	
})(jQuery, this);
