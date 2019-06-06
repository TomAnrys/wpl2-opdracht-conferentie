<?php
require_once ('scripts/database.php');

$stmt = $mysqli->prepare("DELETE FROM sessies WHERE id = ?");
    if($mysqli->error!==""){
       print("<p>Error: ".$mysqli->error."</p>");
    }
    $stmt->bind_param("i", $iduser);

    $iduser = $_GET['id'];

    $stmt->execute();
    //controleer op errors bij het uitvoeren van het statement
    if(count($stmt->error_list)){
        print("<pre>");
        print_r($stmt->error_list);
        print("</pre>");
    }
    $stmt->close();
    //print("gelukt");
    header("location:Overzicht_zalen.php");

?>