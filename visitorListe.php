<?php 

     $bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', ''); 

     $sql = "SELECT nom, acronyme_institut, statut FROM utilisateurs";

     $statement = $bdd->prepare($sql);
     $statement->execute();
        
     $tables = $statement->fetchAll(PDO::FETCH_NUM);
     //var_dump($tables);

      if(!empty($tables)){
        echo '<div class="blocs">';
        if(count($tables) <= 2 ){

            foreach($tables as $t){
                $name = str_replace(".pdf", "", $t[0]);
                echo '<div class="blocsdoc">
                      <p>Nom de la personne : '.$name.'</p>
                      <div class="blocus">
                            <p> Etablissement : '.$t[1].'</p>
                            <p> Statut : '.$t[2].'</p>
                      </div>
                      <div class="f">
                      
                      </div>
                      </div>
                ';
            }
            echo '<br><br><br><br>';
        }else{
            foreach($tables as $t){
                $name = str_replace(".pdf", "", $t[0]);
                echo '<div class="blocsdoc">
                      <p>Nom de la personne : '.$name.'</p>
                      <div class="blocus">
                            <p> Etablissement : '.$t[1].'</p>
                            <p> Statut : '.$t[2].'</p>
                      </div>
                      <div class="f">
                    
                      </div>
                      </div>
                ';
        }
        echo '</div>';   
    } 
    }echo '<br><br><br><br>';
    echo '<br>';
?>