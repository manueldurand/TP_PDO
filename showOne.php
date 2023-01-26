<?php
include './connexion.php';
$id = filter_input(INPUT_GET, 'id');
$statement = $pdo->query("SELECT * FROM mes_jeux JOIN consoles
ON mes_jeux.console_id = consoles.id WHERE mes_jeux.id = " . $id);
$result = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump($result);


echo 'Nom : ' . $result['nom'];
echo '<br>';
echo 'Console : ' . $result['nom_console'];
echo '<br>'; ?>
<p>Idéalement on met une description du jeu ici...voire une photo !</p>
<a href="form_update.php?id=<?= $id ?>">Modifier ce jeu</a>
<br>
<a href="delete.php?id=<?=$id?>">Effacer ce jeu</a>
<br>
<a href="index.php">Retour</a>