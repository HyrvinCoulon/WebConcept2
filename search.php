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

        echo '<div class="blocs">';
        if(!empty($tables)){
            if(count($tables)){

                foreach($tables as $t){
                    echo '<div class="blocsdoc">
                          <p>'.$t[2].'</p>
                          <div class="blocus">
                                <p>'.$t[1].'</p>
                                <p>'.$t[3].'</p>
                          </div>
                          </div>
                    ';
                }
                echo '<br><br><br>';
            }else{
                foreach($tables as $t){
                    echo '<div class="blocsdoc">
                          <p>'.$t[2].'</p>
                          <div class="blocus">
                                <p>'.$t[1].'</p>
                                <p>'.$t[3].'</p>
                          </div>
                          </div>
                    ';
                }
            }
            
        }
        echo '</div>';
      }
    ?>
</section>
<?php ?>