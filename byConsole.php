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
    $statement = $pdo->query("SELECT * FROM `mes_jeux` WHERE console = '$console' ORDER BY LOWER( `nom`)");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h3>Les jeux de la console <?=str_replace('\'', '', $console)?> :</h3>
    <ul>
    <?php
    foreach($result as $arr => $col):
        $id = $col['id'];?>
      
        <li><?= $col["nom"] ?></li>
        <a href="showOne.php?id=<?=$id?>">Voir ce jeu en détail</a>
        
    <?php endforeach?>
        </ul>
        <a href="index.php">Retour</a>
</body>
</html>
