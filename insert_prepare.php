<?php
include "connexion.php";
$nom = filter_input(INPUT_POST, 'nom');
$console_id = filter_input(INPUT_POST, 'console');
// preparation
$statement = $pdo->prepare(
    "INSERT INTO `mes_jeux`(nom, console_id)
    VALUES (:n, :c);");

    // faire correspondre les valeurs, : pour utiliser un nom à la place de ?...

$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console_id, PDO::PARAM_STR);

$result = $statement->execute();

if($result = true){
    echo "Le Jeu n°".$pdo->lastInsertId()." a été créé avec succès.<br>";
    echo '<a href="index.php">Retour</a>';
}