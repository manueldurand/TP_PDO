<?php
include './connexion.php';
$id = $_GET['id'];
$statement = $pdo->query("SELECT * FROM `mes_jeux` WHERE id = " . $id);
$result = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump($result);

echo 'Mon jeu numéro : ' . $result['id'];
echo '<br>';
echo 'Nom : ' . $result['nom'];
echo '<br>';
echo 'Console : ' . $result['console'];
echo '<br>'; ?>
<a href="form_update.php?id=<?= $id ?>">Modifier ce jeu</a>
<br>
<a href="delete.php?id=<?=$id?>">Effacer ce jeu</a>
<br>
<a href="index.php">Retour</a>