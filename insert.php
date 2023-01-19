<?php
include "connexion.php";
$nom = filter_input(INPUT_POST, 'nom');
$console = filter_input(INPUT_POST, 'console');
$sql = "INSERT INTO `mes_jeux` (`nom`, `console`) VALUES (' ".$nom." ', '".$console."' );";
// echo $sql."<br>";
$statement = $pdo->query($sql);
var_dump($statement);