'use strict';
function affDetails(reponse){
		reponse=JSON.parse(reponse);
		console.log(reponse);
		$('#product_details').empty();
		$('#product_details').append('<p><img src="www/images/meals/'+reponse.Photo+'"></p>');
		$('#product_details').append('<p><strong>'+reponse.Description+'</strong></p>');
		$('#product_details').append('<p><strong>'+reponse.SalePrice+' €</strong></p>');
}

function loadDetails(){
console.log($('#products').val());
	$.post("php/affDetails.php","id="+$('#products').val(),affDetails);
}

$(function(){

	$('#products').on("change",loadDetails);

});
