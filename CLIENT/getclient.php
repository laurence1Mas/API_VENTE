<?php
	include('../CONNEXION/connexion.php');

		$rqt="SELECT * FROM  `tclient`";
        $stmt = $dbconnection->prepare($sql);
        if ($stmt === false) {
            throw new Exception("Erreur de préparation de la requête.");
        }
		$result=array();
		while($fetchData=$rqt2->fetch_assoc()){
			$result[]=$fetchData;
		}
		echo json_encode($result);		
?>