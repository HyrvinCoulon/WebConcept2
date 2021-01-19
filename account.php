<?php  
   if(isset($_GET['display'])){
       $display = $_GET['display'];
   }
?>

   <section>
   <br>
       <div class="account">
           <div class="abloc">
                <div class="icon"></div>
                <br><br>
                <ul>
                    <?php 
                      
                      switch($_SESSION['user']->getType()){
                          case "Etudiant":
                            echo '<li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=shelve">Bibliothèque Personnel</a></li>
                                  <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=">Informations utilisateurs</a></li>';
                          break;
                          case "Professeur":
                            echo '<li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=shelve">Bibliothèque Personnel</a></li>
                                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=add">Ajouter Documents</a></li>
                                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=">Informations utilisateurs</a></li>';
                          break;
                          case "administrateur":
                            echo '<li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=shelve">Bibliothèque Personnel</a></li>
                                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=add">Ajouter Documents</a></li>
                                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=">Informations utilisateurs</a></li>';
                          break;
                      }
                     
                    ?>
                </ul>
           </div>
           <div class="display">
             <?php 
                 switch($display){
                     case 'shelve':
                        include("shelve.php");
                     break;
                     case 'add':
                        include("upload.php");
                     break;
                 }
             ?>
           </div>
       </div>

   </section>
   <br><br>
   <br><br>
       <br><br><br><br>
       <br><br> <br><br><br><br>
       <br><br>       
<?php ?>