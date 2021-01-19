<?php 

     $bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', ''); 

     $sql = "SELECT documents.document_id,nom,acronyme_institut,libelle FROM documents, depot WHERE user_id = ".$_SESSION['user']->getId()." AND depot.document_id = documents.document_id";

     $statement = $bdd->prepare($sql);
     $statement->execute();
        
     $tables = $statement->fetchAll(PDO::FETCH_NUM);
     //var_dump($tables);

      if(!empty($tables)){
        echo '<div class="blocs">';
        if(count($tables) <= 2 ){

            foreach($tables as $t){
                $name = str_replace(".pdf", "", $t[1]);
                echo '<div class="blocsdoc">
                      <p>Titre : '.$name.'</p>
                      <div class="blocus">
                            <p> Etablissement : '.$t[2].'</p>
                            <p>Type : '.$t[3].'</p>
                      </div>
                      <div class="f">
                      <a href="display.php?id='.$t[0].'">Voir</a>
                      </div>
                      </div>
                ';
            }
            echo '<br><br><br><br>';
        }else{
            foreach($tables as $t){
                $name = str_replace(".pdf", "", $t[1]);
                echo '<div class="blocsdoc">
                      <p> Titre :'.$name.'</p>
                      <div class="blocus">
                            <p> Etablissement : '.$t[2].'</p>
                            <p>Type : '.$t[3].'</p>
                      </div>
                      <div class="f ">
                        <a href="display.php?id='.$t[0].'">Voir</a>
                      </div>
                      </div>
                ';
        }
        echo '</div>';   
    } 
    }echo '<br><br><br><br>';
    echo '<br>';
?>