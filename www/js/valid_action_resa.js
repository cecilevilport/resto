'use strict';

// Fichier pas finalement utilisé sur le tp mais si besoin...


$(document).ready(function(){
	$('#reserver').click(function(){

		$('#confirm_action').fadeIn(150, function(){
			$('#confirm_action').html("<p>Votre réservation a bien été prise en compte</p>");
			$('#confirm_action').fadeOut(3000);
			setTimeout(function(){ document.getElementById('form_resa').submit();}, 3000);
		});
	});

});