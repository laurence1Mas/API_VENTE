<?php
    include('../CONNEXION/connexion.php');
?>
<?php
    $id_approvisionnement=htmlspecialchars($_POST['id_approvisionnement']);
    $stmt=$dbconnection->prepare("DELETE FROM `approvisionnemnt` WHERE id_approvisionnement=:id_approvisionnement");
    $stmt->bindParam("id_approvisionnement", $id_approvisionnement,PDO::PARAM_STR);
    
    $stmt->execute();
    $status= 'succes';
    echo json_encode(array("response"=>$status));
?>