<?php ?>


        <section>
            <div class="v">
                <form <?php echo 'action="accueil.php?id='.$_SESSION['user']->getId().'&v=s"' ?> method="POST">
                    <input type="text" placeholder="Entrer le modèle de recherche" name="doc">
                    <input type="submit" name="searched" value="Rechercher">
                </form>
            </div>
            <br>
            <p class="w">Ceci est la section où vous commencez à faire vos recherches. Les différentes blocs ci-dessous 
                sont présentés
                pour donner un meilleure contrainte sur les documents visés et gagner en temps.
            </p>
            <div class="span1"> 
                <span></span>   
           </div>
            <br>
            <h2>Documents de recherche</h2>
                <br>
                  <div class="blocd">
                    <div class="first-row">
                            <div class="blocdcoc col custom1">
                                <div class="i1"></div>
                                <br>
                                <?php echo '<a href="accueil.php?id='.$_SESSION['user']->getId().'&v=s&c=Cours">Cours ou Livres</a>'; ?>
                            </div>

                            <div class="blocdcoc col custom1">
                                <div class="i2"></div>
                                <br>
                                <?php echo '<a href="accueil.php?id='.$_SESSION['user']->getId().'&v=s&c=Rapport">Rapport de Stage</a>'; ?>
                            </div>
                            
                            <div class="blocdcoc col custom1">
                                <div class="i3"></div>
                                <br>
                                <?php echo '<a href="accueil.php?id='.$_SESSION['user']->getId().'&v=s&c=Mémoire">Mémoires de Fin de cycle</a>'; ?>
                            </div>
                        </div>
                    <div class="second-row">
                            <div class="blocdcoc col1 custom1">
                                <div class="i4"></div>
                                <br>
                                <?php echo '<a href="accueil.php?id='.$_SESSION['user']->getId().'&v=s&c=Projet">Projet Tuteuré</a>'; ?>
                            </div>
                        </div>    
                    </div>
                <div class="span1"> 
                     <span></span>   
                </div>
                <br><br><br>
        </section>
        <?php ?>