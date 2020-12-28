<?php include("head.php") ?>
<?php include("header.php") ?>

        <section>
            <div class="v">
                <form action="search.php" method="POST">
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
                                <p>Cours ou Livres</p>
                            </div>

                            <div class="blocdcoc col custom1">
                                <div class="i2"></div>
                                <br>
                                <p>Rapport de Stage</p>
                            </div>
                            
                            <div class="blocdcoc col custom1">
                                <div class="i3"></div>
                                <br>
                                <p>Projet Tuteuré</p>
                            </div>
                        </div>
                    <div class="second-row">
                            <div class="blocdcoc col1 custom1">
                                <div class="i4"></div>
                                <br>
                                <p>Mémoires de Fin Cycle</p>
                            </div>
                            
                            <div class="blocdcoc col1 custom1">
                                <div class="i5"></div>
                                <br>
                                <p>Sujet de Thèse</p>
                            </div>
                        </div>    
                    </div>
                <div class="span1"> 
                     <span></span>   
                </div>
                <br>
        </section>
        <?php include("footer.php") ?>