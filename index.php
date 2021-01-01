<?php include("head.php") ?>
<h1 class="custom">Connexion</h1>
<div class="blocf">
        <form action="test.php" method="POST">
        <br>
            <input type="text" name="nom" placeholder="Nom"><br><br>
            <input type="text" name="matricule" placeholder="Matricule Ecole"><br><br>
            <select name="acro">
            <option value="" selected disabled hidden>Choisissez ici</option>
                                <option>IST</option>
                                <option>ITO</option>
                                <option>ENSET</option>
                                <option>ENS</option>
                                <option></option>
                            </select><br><br>
            <input type="password" name="motdepasse" placeholder="Mot de passe"><br><br>
            <input type="submit"name="connexion" value="Connexion"><br><br>
        </form>
</div>

