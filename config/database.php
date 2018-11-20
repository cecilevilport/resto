<?php

/*
 * Database configuration settings used by PDO.
 */
function db_connect(){
	//	Connexion à la base de données
	$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=UTF8','root','');
	return $bdd;
	
	
}