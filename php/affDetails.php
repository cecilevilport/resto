<?php

require("../config/database.php");
$bdd=db_connect();

$id=$_POST['id'];

$query=$bdd->prepare("SELECT * FROM meal WHERE Id=?");
$query->execute(array($id));
$meals=$query->fetch();
//echo json_encode($query->errorInfo());
echo json_encode($meals);
