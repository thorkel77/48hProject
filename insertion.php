<?php
    $pdo1 = new PDO("mysql:host=localhost;dbname=48hproject", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $pdoStat = $pdo1->prepare('SELECT * FROM images');

$executeIsOk = $pdoStat->execute();


$images = $pdoStat->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Données en BD</H1>
    <ul>
        
            <?php
            foreach ($images as $image):?>
    
            <li>
            <?=$image['Name']?> <?=$image['product']?> <?=$image['Human']?>
            </li>
        </ul>
    
        <?php endforeach?>
    </ul>

</body>
</html>