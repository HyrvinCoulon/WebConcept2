<?php
    $bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', '');  
    ?>
<section>
<div class="v">
                <form action="search.php" method="POST">
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
            if(count($tables)){

                foreach($tables as $t){
                    $name = str_replace(".pdf", "", $t[2]);
                    echo '<div class="blocsdoc">
                          <p>Titre : '.$name.'</p>
                          <div class="blocus">
                                <p> Etablissement : '.$t[1].'</p>
                                <p>Type : '.$t[3].'</p>
                          </div>
                          <a href="display.php?id='.$t[0].'">Voir</a>
                          </div>
                    ';
                }
                echo '<br><br><br>';
            }else{
                foreach($tables as $t){
                    $name = str_replace(".pdf", "", $t[2]);
                    echo '<div class="blocsdoc">
                          <p> Titre :'.$name.'</p>
                          <div class="blocus">
                                <p> Etablissement : '.$t[1].'</p>
                                <p>Type : '.$t[3].'</p>
                          </div>
                          <a href="display.php?id='.$t[0].'">Voir</a>
                          </div>
                    ';
                }
            }
            echo '</div>';   
        }else{
            echo "Recherches pour $doc: Aucun Résultats Correspondants";
        }
      }
    ?>
</section>
<?php ?>