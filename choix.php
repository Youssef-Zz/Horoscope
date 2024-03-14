<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Horoscope</title>
</head>
<body>
    <a href="index.php?action=modifier">Administrer</a>
    <form action="index.php?action=reponse" method="post">
        <select name="liste">
        <?php foreach($signe as $cle => $v): ?>
            <option value="<?= $cle?>"><?= $cle?></option>
        <?php endforeach?>
            <input type="submit" value="envoyer">

    </select>
    </form>
    
</body>
</html>