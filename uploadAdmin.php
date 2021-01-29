<?php 
  include("registerExcel.php");
?>

<div class="up">
        <form action="uploadAdmin.php" method="POST" enctype="multipart/form-data">
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

    <?php ?>
