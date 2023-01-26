<?php

include "connexion.php";
$id = filter_input(INPUT_POST, 'id');
$nom = filter_input(INPUT_POST, 'nom');
$console_id = filter_input(INPUT_POST, 'console');

// preparation
$statement = $pdo->prepare("UPDATE mes_jeux SET  console_id = :c WHERE nom = :n;");
// faire correspondre les valeurs, : pour utiliser un nom à la place de ?...

$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console_id, PDO::PARAM_INT);

$result = $statement->execute();

if($result = true){
    echo "Le Jeu a été modifié avec succès.<br>";
    echo '<a href="index.php">Retour</a>';
}

?>
