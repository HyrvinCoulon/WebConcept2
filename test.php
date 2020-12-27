<?php
 $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');

 if(isset($_POST['connexion'])){
     $nom = htmlspecialchars($_POST['nom']);
     $matricule = htmlspecialchars($_POST['matricule']);
     $motdepasse = htmlspecialchars($_POST['motdepasse']);

     if(!empty($nom) && !empty($motdepasse)){
         $reqcon = $bdd->prepare("SELECT * FROM Users WHERE nom = ?");
         $reqcon->execute(array($nom));
         $userexist = $reqcon->rowCount();
         $userinfo = $reqcon->fetch();

         if($userexist == 1){
             header("Location: index.php?id=".$nom);
         }else{
             echo "L'utilisateur n'existe pas";
         }
     }
 }

?>