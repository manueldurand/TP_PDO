<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de jeux par console</title>
</head>
<body>
    
    <?php
    include './connexion.php';
    $console = filter_input(INPUT_GET, 'console');
    // var_dump($console);
    $statement = $pdo->query("SELECT mes_jeux.id, mes_jeux.nom  FROM `mes_jeux` JOIN consoles
    ON mes_jeux.console_id = consoles.id WHERE nom_console = '$console' ");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <h3>Les jeux de la console <?=str_replace('\'', '', $console)?> :</h3>
    <ul>
    <?php
    foreach($result as $arr => $col):
        $id = $col['id'];?>
      
        <li><?= $col["nom"] ?></li>
        <a href="showOne.php?id=<?=$col['id'];?>">Voir ce jeu en détail</a>
        
    <?php endforeach?>
        </ul>
        <a href="index.php">Retour</a>
</body>
</html>
