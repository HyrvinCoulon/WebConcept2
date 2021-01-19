<?php 
     $bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', '');
     if(isset($_POST['upload'])){
         //var_dump($_POST);
         extract($_POST);
        if($_FILES['doc']){
            //var_dump($_FILES['doc']);
            $modified = str_replace(' ', '_', $_FILES['doc']['name']);
            $t = $_FILES['doc']['type'];
            //echo $modified;
            $sql = "INSERT INTO documents (nom, acronyme_institut, libelle, type_doc) VALUES ('$modified', '$acro', '$lib', '$t')";
            move_uploaded_file($_FILES['doc']['tmp_name'], 'documents/'.$modified);
            $rep = $bdd->prepare($sql);
            $rep->execute();
        }
     }

?>

    <div class="up">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label>Type de Documents: </label><select name="lib" >
                                <option>Cours</option>
                                <option>Rapport de Stage</option>
                                <option>Projet Tuteuré</option>
                                <option>Mémoire</option>
                                <option>Sujet de Thèse</option>
                            </select><br><br>
            <label>Etablissement de provenance: </label><select name="acro" >
                                <option>IST</option>
                                <option>ITO</option>
                                <option>ENSET</option>
                                <option>ENS</option>
                                <option></option>
                            </select><br><br>
            <label>Sélectionnez un fichier: </label>
            <input type="file" name="doc"><br><br>
            <input type="submit" name="upload">
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br>

<?php include("footer.php") ?>