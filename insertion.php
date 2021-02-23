<?php
    
    require __DIR__. '/html/header.html';
    require __DIR__. '/html/navbar.html';
?>
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
        
            <?php
            foreach ($images as $image):?>
    
<br><br>
       <table>
  <tr>
    <td><?=$image['Name']?></td>
    <td><?=$image['Type']?></td>
    <td><?=$image['Image']?></td>
  </tr>
</table>

        
     </ul>
    
        <?php endforeach?>
    </ul>

</body>
</html>

<?php
    
    require __DIR__. '/html/footer.html';
    
?>