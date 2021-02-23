<?php
    require __DIR__. '/html/header.html';
?>



<?php
$pdo5 = new PDO("mysql:host=localhost;dbname=48hproject", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo5->query("SELECT * FROM images;");
$result2 = $pdo5->query("SELECT * FROM images;");
$info = $result->fetch(PDO::FETCH_OBJ);?>



<body>
    <?php require __DIR__. '/html/form.html';?>

    


    <?php while($info2 = $result2->fetch(PDO::FETCH_OBJ)) {?>
        <img src="<?php echo $info2->link;?>" alt="img">
    <?php echo '<p><a href="download.php?file=' . urlencode($info2->name) . '">Download</a></p>';?>
<?php }?>


</body>

<?php
    require __DIR__. '/html/footer.html';
?>