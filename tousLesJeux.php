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

$statement = $pdo->query("SELECT * FROM `mes_jeux`");
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
    
<?php endforeach?>
    </ul>
    <a href="index.php">Retour</a>
</body>
</html>