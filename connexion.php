<?php

$serveur="localhost";
$user = 'root';
$bdd='challenge';
$pw = '';

try
{
    $connexion = new PDO('mysql:host=localhost;dbname=48hproject', $user, $pw);

}catch (PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}


?>

<?php

$pdo1 = new PDO("mysql:host=localhost;dbname=48hproject", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



$_POST["Name1"] = htmlentities($_POST["Name"], ENT_QUOTES);
$_POST["Type1"] = htmlentities($_POST["Type"], ENT_QUOTES);
$_POST["Product1"] = htmlentities($_POST["Product"], ENT_QUOTES);
$_POST["Human1"] = htmlentities($_POST["Human"], ENT_QUOTES);
$_POST["institutional1"] = htmlentities($_POST["institutional"], ENT_QUOTES);
$_POST["Format1"] = htmlentities($_POST["Format"], ENT_QUOTES);
$_POST["Crédit1"] = htmlentities($_POST["Crédit"], ENT_QUOTES);
$_POST["Rights1"] = htmlentities($_POST["Rights"], ENT_QUOTES);
$_POST["Copyright1"] = htmlentities($_POST["Copyright"], ENT_QUOTES);
$_POST["Image1"] = htmlentities($_POST["Image"], ENT_QUOTES);
$_POST["end_date1"] = htmlentities($_POST["end_date"], ENT_QUOTES);
$pdo1->exec("INSERT INTO images (Name, Type, Product, Human, institutional,Format,Crédit,Rights,Copyright) VALUES ('$_POST[Name]', '$_POST[Type]', '$_POST[Product]','$_POST[Human]','$_POST[institutional]','$_POST[Format]','$_POST[Crédit]','$_POST[Rights]','$_POST[Copyright]' );");
echo "Donnée(s) Enregister";
header('Refresh: 0');
?>

<?php
<div class="starter-template">
<form method="post" action="">
    <div class="form-group">
        <label for="titre">Nom Image</label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="XXX">
        <label for="titre">Type</label>
        <input type="text" class="form-control" id="Type" name="Type" placeholder="XXX">
        <label for="titre">Image</label>
        <input type="file" class="form-control" id="Image" name="Image">
    </div>

    <button type="submit" class="btn btn-primary">Enregister</button>

