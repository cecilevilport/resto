'use strict';

$(document).ready(function(){
	$('#valide_commande').click(function(){
		$('#confirmation_commande').fadeIn(150, function(){
			$('#confirmation_commande').html("<p>Votre commande a bien été prise en compte</p>");
			$('#confirmation_commande').fadeOut(3000);
			setTimeout(function(){ document.getElementById('form_valid_panier').submit();}, 3000);
		});
	});
});