<?php

include "connexion.php";
$id = filter_input(INPUT_POST, 'id');
$nom = filter_input(INPUT_POST, 'nom');
$console = filter_input(INPUT_POST, 'console');

// preparation
$statement = $pdo->prepare("UPDATE `mes_jeux` SET `nom` = :n, `console` = :c WHERE id= :id;");
// faire correspondre les valeurs, : pour utiliser un nom à la place de ?...

$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console, PDO::PARAM_STR);
$statement->bindParam(':id', $id, PDO::PARAM_INT);

$result = $statement->execute();

if($result = true){
    echo "Le Jeu n° ".$id." a été modifié avec succès.<br>";
    echo '<a href="index.php">Retour</a>';
}

?>
