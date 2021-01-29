<?php
if(isset($_FILES['doc']['name'])){
    extract($_POST);
	$con=mysqli_connect("localhost","root","","baseecoles");
    include("xlsx.php");
    $query = "";
	if($con){
		$excel=SimpleXLSX::parse($_FILES['doc']['tmp_name']);
		echo "<pre>";	
		//print_r($excel->rows(1));
		//print_r($excel->dimension(2));
		//print_r($excel->sheetNames());
        for ($sheet=0; $sheet < 1 ; $sheet++) { 
        $rowcol=$excel->dimension($sheet);
        $i=0;
        if($rowcol[0]!=1 && $rowcol[1]!=1){
            foreach ($excel->rows($sheet) as $key => $row) {
                //print_r($row);
                $q="";
                foreach ($row as $key => $cell) {
                    //print_r($cell);echo "<br>";
                    if($i > 0){
                        $q.="'".$cell. "',";
                    }
                    //print($q);
                }
                
                if($i > 0){
                    $query="INSERT INTO utilisateurs (nom, statut, acronyme_institut) values (".rtrim($q,",").", ' $acro ');";
                }
                //echo $query;
                /*if(mysqli_query($con,$query))
                {
                    echo "true";
                }*/
                echo "<br>";
                $i++;
            }
	    }
		}
	}
}

?>