<?php 
   $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
   $v = "";

  if(isset($_GET['id']) AND $_GET['id'] > 0 AND isset($_SESSION['user'])){
    $getid = intval($_GET['id']);
    $v = isset($_GET['v']) ? $_GET['v'] : '';
    $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    $_SESSION['user'] = new User($userinfo['id'], $userinfo['nom'],$userinfo['fonction'], $userinfo['motdepasse']);
  }
?>
<body>
        <header>
        <?php echo '<p>Bienvenue, '.$_SESSION['user']->getNom().'</p>
            <ul>
                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=">Accueil</a></li>
                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=d">Documents</a></li>
                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a">Compte</a></li>';
            ?>
                <li><a href="#">Deconnexion</a></li>
                <!-- <li><a href="#">Help</a></li> -->
            </ul>
        </header>
<?php ?>