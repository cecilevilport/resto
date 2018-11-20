<?php

function create_account(){
  //connexion à la base de données
  	  $bdd=db_connect();

  //recuperation des infos du formulaire
      $name = htmlspecialchars($_POST['lastName']);
      $firstname = htmlspecialchars($_POST['firstName']);
      $birth_date = ''.$_POST['birthYear']."-".$_POST['birthMonth']."-".$_POST['birthDay'].'';
      $address = htmlspecialchars($_POST['address']);
      $city = htmlspecialchars($_POST['city']);
      $cp = htmlspecialchars($_POST['zipCode']);
      $tel = htmlspecialchars($_POST['phone']);
      $email = htmlspecialchars($_POST['email']);
      $password = md5($_POST['password']);
//veriication si le compte existe déjà
      $query = $bdd->prepare("SELECT `Email`FROM `user` WHERE Email =?");
      $query->execute([$email]);
      if($verif = $query->fetch())
      {
        return 'Ce compte existe déjà';
      }

      else {
        //insertion si il n'existe pas encore
      	$query = $bdd->prepare("INSERT INTO `user` (`LastName`, `FirstName`, `BirthDate`, `Address`, `City`, `ZipCode`, `Phone`, `Email`, `Password`) VALUES(?,?,?,?,?,?,?,?,?)");
      	$query->execute([$name, $firstname, $birth_date, $address, $city, $cp, $tel, $email, $password]);
        $_SESSION['user']['FirstName']=$firsname;
        $_SESSION['user']['LastName']=$name;
        return 'Merci, votre compte a été créé';
      }
  }

  function verif_user(){
    //connexion à la base de données
        $bdd=db_connect();

    //recuperation des infos du formulaire
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

    //requête pour voir si le mail exister
        $query = $bdd->prepare("SELECT Id_client,Mail,Mot_de_passe,Nom,Prenom FROM `compte_client` WHERE Mail =?");
        $query->execute([$email]);

        if($verif = $query->fetch())
        {
            if(md5($password)==$verif['Mot_de_passe']){
              $_SESSION['user']['Prenom']=$verif['Prenom'];
              $_SESSION['user']['Nom']=$verif['Nom'];
              $_SESSION['user']['id']=$verif['Id_client'];
               return 'ok';
              }
            else {
              return 'Mot de passe incorrect';
            }
        }

        else {
            return 'Email inconnu';
        }
  }
