<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pdo = new PDO(
            'mysql:host=nba02whlntki5w2p.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306;dbname=dxm7qjicot42d0cn', 
            'nrbke2prrwfbmdby', 
            'wvcss4pu018ic3da'
        );
        $query = $pdo->prepare('select * from mails');
        $query->execute();
        $addresses = $query->fetchAll(PDO::FETCH_OBJ);
    ?>
    <h1>Success</h1>
    <ul>
        <?php foreach ($addresses as $address) : ?>
            <li><?= $address->email ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>