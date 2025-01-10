<?php
	include('../CONNEXION/connexion.php');

		$rqt="SELECT * FROM  `vmouvementstock`";
        $stmt = $dbconnection->prepare($rqt);
        if ($stmt === false) {
            throw new Exception("Erreur de préparation de la requête.");
        }
		$result=array();
		while($result=$stmt->PDO::fetch_assoc()){
			$results[]=$result;
		}
		echo json_encode($results);		
?>