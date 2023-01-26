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
include 'connexion.php';
$id = filter_input(INPUT_GET, 'id');

$statement =  $pdo->prepare("SELECT *, nom_console FROM mes_jeux JOIN consoles ON mes_jeux.console_id = consoles.id WHERE mes_jeux.id = :id");
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
$jeu = $statement->fetch(PDO::FETCH_ASSOC);
$nom = $jeu['nom'];
$console = $jeu['nom_console'];
$id = $jeu['id'];
    ?>
    <h1>Modification d'un ancien jeu</h1>
    <form action="update.php" method="post">
        <label for="nom">Nom du jeu :</label>
        <input type="text" size="40" name="nom" value="<?= $nom; ?>"><br>
        <label for="">Nom de la console :</label>
        <select name="console" id="console">
            <option value=""><?= $console ?></option>
            <option value="1">xbox</option>
            <option value="2">N.E.S</option>
            <option value="3">PS4</option>
            <option value="4">switch</option>
            <option value="5">Amiga</option>
            <option value="6">PSP</option>
        </select>
        <input type="submit" name="ok" value="ok">
    </form>
</body>

</html>