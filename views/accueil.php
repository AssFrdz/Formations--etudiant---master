<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horoscope</title>
</head>
<body>
<div class="container">
    <a href="index.php?action=connecter">Administrer</a>
    <form action="index.php?action=choisir" method="post">
        <select name="choix" size="1">
            <?php foreach($formations as $k => $v): ?>
                <option value="<?= $k ?>"><?= $k ?></option>
            <?php endforeach;?>
        </select>
        <input type="submit" value="OK">
    </form>
</div>
</body>
</html>
