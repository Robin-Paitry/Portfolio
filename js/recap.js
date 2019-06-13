function resizeReCaptcha() {
    
	var width = $( ".g-recaptcha" ).parent().width();
	
	if (window.matchMedia("(min-width: 1920px)").matches) {
		/* La largeur minimum de l'affichage est 600 px inclus */
		scale= 0.66;
	  } else {
		/* L'affichage est inférieur à 600px de large */
	 

	if (width < 302) {
		var scale = width / 302;
	} else {
		var scale = 1;
	} }
	
	$( ".g-recaptcha" ).css('transform', 'scale(' + scale + ')');
	$( ".g-recaptcha" ).css('-webkit-transform', 'scale(' + scale + ')');
	$( ".g-recaptcha" ).css('transform-origin', '0 0');
	$( ".g-recaptcha" ).css('-webkit-transform-origin', '0 0');
  };
  
  $( document ).ready(function() {
	  
	  $( window ).on('resize', function() {
		  resizeReCaptcha();
	  });
  
	  resizeReCaptcha();
	  
  });