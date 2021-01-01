<?php  ?>

   <section>
   <br>
       <div class="account">
           <div class="abloc">
                <div class="icon"></div>
                <br><br>
                <ul>
                    <?php echo '<li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=shelve">Bibliothèque Personnel</a></li>
                                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=add">Ajouter Documents</a></li>
                                <li><a href="accueil.php?id='.$_SESSION['user']->getId().'&v=a&display=info">Informations utilisateurs</a></li>';
                    ?>
                </ul>
           </div>
           <div class="display"></div>
       </div>

   </section>
   <br><br>
   <br><br>
       <br><br><br><br>
       <br><br> <br><br><br><br>
       <br><br>       
<?php ?>