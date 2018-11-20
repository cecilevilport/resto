<?php

//appel du fichier de configuration
require('config/database.php');


//liste de tous les aliments
function getMeals(){
	$bdd=db_connect();
	$query=$bdd->prepare('SELECT * FROM meal');
	$query->execute();
	$meals=$query->fetchAll();
	return $meals;
}