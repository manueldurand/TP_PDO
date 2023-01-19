<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer des nouvelles données</title>
</head>
<body>
    <h1>Insertion d'un nouveau jeu</h1>
    <form action="insert_prepare.php" method="post">
        <label for="">Nom</label>
        <input type="text" size="40" name="nom">
        <br>
        <label>Nom de la console</label>
        <input type="text" size="40" name="console">
        <input type="submit" name="ok" value="ok">

    </form>
</body>
</html>