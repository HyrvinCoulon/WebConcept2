<?php
// Database Connection 

/*$bdd = new PDO('mysql:host=localhost;dbname=baseecoles', 'root', '');
//Check for connection error
$select = "SELECT * FROM documents WHERE id = $id";
$result = $bdd->prepare($select);
$result->execute();
$doc = $result->fetch();
*/

// Add header to load pdf file
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="' .$file. '"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file);  
?>