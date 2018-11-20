<?php
function insertResa(){
  $bdd=db_connect();
  $date=$_POST['booking_year'].'-'.$_POST['booking_month'].'-'.$_POST['booking_day'].' '.$_POST['booking_hour'].':'.$_POST['booking_min'].':00';
	$query=$bdd->prepare('INSERT INTO reservations VALUES (?,?,?)');
	$query->execute(array($_SESSION['user']['id'],$date,$_POST['nb_couverts']));
  return 'ok';
} ?>
