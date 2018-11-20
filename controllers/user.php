<?php
session_start();
require('models/user.php');

function is_connect(){
	if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
		return true;
	}
	else
	{
		return false;
	}
}

function createNewUser(){
	$template='user/createUser.phtml';
	require('www/layout.phtml');
}

function control_create_account(){
	$message=create_account();
	$template='user/message.phtml';
	require('www/layout.phtml');
}

function connect(){
	if(isset($_POST['email'])){
			$errorMessage=verif_user();
			echo $errorMessage;
			if($errorMessage=='ok'){
				header('Location:index.php');
			}
			else{
				$template='user/connect.phtml';
				require('www/layout.phtml');
			}
	}
	else{
			$template='user/connect.phtml';
			require('www/layout.phtml');
		}
}

function deconnect(){
	session_destroy();
	header('Location:index.php');
}
