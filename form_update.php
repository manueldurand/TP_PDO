<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les donnée d'un jeu</title>
</head>

<body>
    <?php
    $nom = "Mario";
    $console = "console";
    ?>
    <h1>Modification d'un ancien jeu</h1>
    <form action="update.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" size="40" name="nom" value="<?= $nom?>">
        <label for="">Nom de la console</label>
        <input type="text" size="40" name="console" value="<?= $console?>">
        <input type="submit" name="ok" value="ok">
    </form>

</body>

</html>