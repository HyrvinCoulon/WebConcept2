<?php
    $bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', '');  
       function set_favorite(){

       }
    ?>
<section>
    <?php //include('favorite.php'); ?>
<div class="v">
                 <form <?php echo 'action="accueil.php?id='.$_SESSION['user']->getId().'&v=s" method="POST"'; ?> >
                    <input type="text" placeholder="Entrer le modèle de recherche" name="doc">
                    <input type="submit" name="searched" value="Rechercher">
                </form>
            </div>
    <?php
      if(isset($_POST['searched'])){
          extract($_POST);
        $sql = "SELECT * FROM documents WHERE nom LIKE '$doc%' OR nom LIKE '%$doc' or nom LIKE '%$doc%'";

        $statement = $bdd->prepare($sql);
        $statement->execute();
        
        $tables = $statement->fetchAll(PDO::FETCH_NUM);

        if(!empty($tables)){
            echo '<div class="blocs">';
            if(count($tables) <= 2 ){

                foreach($tables as $t){
                    $name = str_replace(".pdf", "", $t[2]);
                    echo '<div class="blocsdoc">
                          <p>Titre : '.$name.'</p>
                          <div class="blocus">
                                <p> Etablissement : '.$t[1].'</p>
                                <p>Type : '.$t[3].'</p>
                          </div>
                          <div class="f">
                          <button class="favourite" data-user="'.$_SESSION['user']->getId().'" data-id="'.$t[0].'" name="choice" onClick="">Star</button>
                          <a href="display.php?id='.$t[0].'">Voir</a>
                          </div>
                          </div>
                    ';
                }
                echo '<br><br><br><br>';
            }else{
                foreach($tables as $t){
                    $name = str_replace(".pdf", "", $t[2]);
                    echo '<div class="blocsdoc">
                          <p> Titre :'.$name.'</p>
                          <div class="blocus">
                                <p> Etablissement : '.$t[1].'</p>
                                <p>Type : '.$t[3].'</p>
                          </div>
                          <div class="f ">
                            <button class="favourite" data-user="'.$_SESSION['user']->getId().'" data-id="'.$t[0].'" name="choice" onClick="">Star</button>
                            <a href="display.php?id='.$t[0].'">Voir</a>
                          </div>
                          </div>
                    ';
                }
            }
            echo '</div>';   
        }else{
            echo "Recherches pour $doc: Aucun Résultats Correspondants";
        }
      }else{
          $c = $_GET['c'];
        $sql = "SELECT * FROM documents WHERE libelle = '$c' ";

        $statement = $bdd->prepare($sql);
        $statement->execute();
        
        $tables = $statement->fetchAll(PDO::FETCH_NUM);

        
            echo '<div class="blocs">';
            if(count($tables) <= 2){

                foreach($tables as $t){
                    $name = str_replace(".pdf", "", $t[2]);
                    echo '<div class="blocsdoc">
                          <p>Titre : '.$name.'</p>
                          <div class="blocus">
                                <p> Etablissement : '.$t[1].'</p>
                                <p>Type : '.$t[3].'</p>
                          </div>
                           
                          <div class="f ">
                            <button class="favourite" data-user="'.$_SESSION['user']->getId().'" data-id="'.$t[0].'" name="choice" onClick="">Star</button>
                            <a href="display.php?id='.$t[0].'">Voir</a>
                            </div>
                          </div>
                    ';
                }
                echo '<br><br><br><br>';
            }else{
                foreach($tables as $t){
                    $name = str_replace(".pdf", "", $t[2]);
                    echo '<div class="blocsdoc">
                          <p> Titre :'.$name.'</p>
                          <div class="blocus">
                                <p> Etablissement : '.$t[1].'</p>
                                <p>Type : '.$t[3].'</p>
                          </div>
                          <div class="f ">
                            <button class="favourite" data-user="'.$_SESSION['user']->getId().'" data-id="'.$t[0].'" name="choice" onClick="">Star</button>
                            <a href="display.php?id='.$t[0].'">Voir</a>
                          </div>
                          </div>
                    ';
                }
            }
            echo '</div>';
        
      }
    ?>
</section>
<?php ?>