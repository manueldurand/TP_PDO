<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MES JEUX VIDEOS QUE J'ADORE</h1>
<?php
include "connexion.php";
// include "insert_prepare.php";
// echo"Id :".$pdo->lastInsertId()."<br>";

$statement = $pdo->query("SELECT * FROM `mes_jeux`");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
?>

    <ul>
        <li><a href="tousLesJeux.php">voir tous les jeux</a></li>
        <li><a href="byConsole.php?console=ps4">voir les jeux PS4</a></li>
        <li><a href="byConsole.php?console=xbox">voir les jeux xbox</a></li>
        <li><a href="byConsole.php?console=switch">voir les jeux switch</a></li>
        <li><a href="byConsole.php?console=Amiga">voir les jeux Amiga</a></li>
        <li><a href="form_insert.php" >Ajouter un jeu</a></li>
        <br>

    </ul>
<table border>
    <thead>
        <tr>Ma liste de jeux vidéos</tr>
        <br>
    </thead>
    <tbody>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>CONSOLE</th>
            <th colspan="2">EDIT</th>
         
        </tr>
       <?php
       foreach($result as $col):?>
       <tr>
        <td><?=$col['id']?></td>
        <td><?=$col['nom']?></td>
        <td><?=$col['console']?></td>
        <td><a href="form_update.php?id=<?=$col['id']?>">Modifier</a></td>
        <td><a href="delete.php?id=<?=$col['id']?>">Effacer</a></td>
        <?php endforeach?>
       </tr>
    </tbody>
</table>
</body>
<!-- // le mode qui permet d'obtenir un objet est  :  PDO::FETCH_OBJ? cela retourne in objet anonyme (standard Class)

// la méthode fetchAll() permet de retourner le tableau entier, sous forme de matrice,
// composée ici de 4 lignes et chacune des lignes de 3 colonnes.
// Cette méthode est plus appropriée à la requête SELECT * qui demande l'intégralité de la table.
 -->

</html>


