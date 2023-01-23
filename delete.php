<?php

include "connexion.php";
$id = filter_input(INPUT_GET, 'id');

// preparation
$statement = $pdo->prepare("DELETE FROM `mes_jeux` WHERE id= :id;");
// faire correspondre les valeurs, : pour utiliser un nom à la place de ?...

$statement->bindParam(':id', $id, PDO::PARAM_INT);

$result = $statement->execute();

if($result = true){
    echo "Le Jeu n° ".$id." a été effacé avec succès.<br>";
    echo '<a href="index.php">Retour</a>';
}
else{
    echo "erreur...<br>";
    echo '<a href="index.php">Retour</a>';
}
