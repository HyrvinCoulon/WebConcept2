<?php

session_start();
require('user.php');
 $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');

 if(isset($_POST['connexion'])){
     $nom = htmlspecialchars($_POST['nom']);
     $matricule = htmlspecialchars($_POST['matricule']);
     $motdepasse = htmlspecialchars($_POST['motdepasse']);

     if(!empty($nom) && !empty($motdepasse) && !empty($matricule)){
         $reqcon = $bdd->prepare("SELECT * FROM Users WHERE nom = ?");
         $reqcon->execute(array($nom));
         $userexist = $reqcon->rowCount();
         $userinfo = $reqcon->fetch();

         $_SESSION['user'] = new User($userinfo['id'], $userinfo['nom'],$userinfo['fonction'], $userinfo['motdepasse']);
         //$_SESSION['user']-setId();

         if($userexist == 1){
             header("Location: accueil.php?id=".$_SESSION['user']->getId()."&v=");
         }else{
             echo "L'utilisateur n'existe pas";
         }
     }
 }

?>