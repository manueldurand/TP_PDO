<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "connexion.php";
// include "insert_prepare.php";
// echo"Id :".$pdo->lastInsertId()."<br>";

$statement = $pdo->query("SELECT mes_jeux.id, nom, nom_console as console FROM mes_jeux 
JOIN consoles
ON mes_jeux.console_id = consoles.id
ORDER BY mes_jeux.id;");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
echo "<br>";

echo "<br>";
?>
<p>Ma liste de jeux vidéos : </p>
    <ul>
<?php
foreach($result as $arr => $col):
    $id = $col['id'];?>
  
    <li><?= $col["nom"]." sur la console ".$col['console'] ?></li>
    <a href="showOne.php?id=<?=$id?>">Voir ce jeu en détail</a>
    <a href="form_update.php?id=<?=$id?>">Modifier ce jeu</a>
    <a href="delete.php?id=<?=$id?>">Effacer ce jeu</a>
    <br><br>
    
<?php endforeach?>
    </ul>
    <a href="index.php">Retour</a>
</body>
</html>