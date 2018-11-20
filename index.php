<?php

require('controllers/meal.php');
require('controllers/user.php');
require('controllers/booking.php');

if(isset($_GET['action']))
{
	switch($_GET['action']){
		case 'newUser':
			createNewUser();
			break;
		case 'create_account':
			control_create_account();
			break;
		case 'connexion':
			connect();
			break;
		case 'deconnexion':
			deconnect();
			break;
		case 'reserver':
			reserver();
			break;
		case 'validResa':
			validerResa();
			break;
	}
}
else
{
	listMeal();
}



?>
