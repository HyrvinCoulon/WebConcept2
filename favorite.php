<?php
        session_start();

        //$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');

       
        $getid = $_GET['id'];
        $getuserid = $_GET['user'];
        //extract(json_decode($_POST));

        echo ' <h3>'.var_dump($_POST).'</h3> ';

        $bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', '');  
        $sql = "SELECT * FROM depot WHERE user_id = $getuserid AND document_id = $getid";

        $statement = $bdd->prepare($sql);
        $statement->execute();
        
        $tables = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(count($tables) == 1){
            $Del="DELETE FROM depot WHERE user_id=$getuserid AND document_id=$getid";
            $bdd->prepare($Del)->execute();
        }else{
            $Add = "INSERT INTO depot (user_id, document_id) VALUES ($getuserid, $getid)";
            $bdd->prepare($Add)->execute();
        }
    

?>