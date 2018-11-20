<?php

require('models/meal.php');

function listMeal(){

	$meals=getMeals();
	$template='home.phtml';
	require('www/layout.phtml');


}
