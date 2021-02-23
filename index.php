<?php
    
    require __DIR__. '/html/header.html';
    require __DIR__. '/html/navbar.html';
?>
<head>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <div id="page" class="container">
    <div id="content">
    <form  method="post" action="">
					<div>
						<label>Nom Image :<input type="text" name="Name" id="Name" placeholder="Nom de l'image" /></label><br />

						<label for="titre">Choisir une image :</label>

						<input type="file" id="Image" name="Image" accept="image/png, image/jpeg">
					</div>

					<div>
						<label> Type d'image : </label>

						<select name="Type" id="Type">
							<option value="valeur1">PassionFroid</option>
							<option value="valeur2" selected>Fournisseur</option>
							<option value="valeur3">Logo</option>
						</select> <br />

					</div>

					<div>
						<p>Photo avec produit:</p>

						<select name="Product" id="Product">
							<option value="valeur1">Oui</option>
							<option value="valeur2" selected>Non</option>

						</select> <br />

					</div>

					<div>
						<p>Photo avec humain:</p>

						<select name="Human" id="Human">
							<option value="valeur1">Oui</option>
							<option value="valeur2" selected>Non</option>

						</select> <br />

					</div>

					<div>
						<p>Photo institutionnelle:</p>

						<select name="institutional" id="institutional">
							<option value="valeur1">Oui</option>
							<option value="valeur2" selected>Non</option>

						</select> <br />

					</div>
					<div>
						<label> Format : </label>
						<select name="Format" id="Format">
							<option value="valeur1">Vertical</option>
							<option value="valeur2" selected>Horizontal</option>

						</select> <br /><br />

					</div>

					<div>
						<label>Crédits : <input type="text" name="Crédit" id="Crédit" /></label><br />
					</div>

					<div>
						<p>Droits d’utilisation limités :</p>

						<select name="Rights" id="Rights">
							<option value="valeur1">oui</option>
							<option value="valeur2" selected>non</option>

						</select> <br />
					</div>

					<div>
						<label>Copyright : <input type="text" name="Copyright" /></label><br />
					</div>

					<div>
						<label for="start">Date de fin d’utilisation :</label>

						<input type="texte" id="end" name="end_date" value="2018-07-22" min="2018-01-01"
							max="2022-12-31"><br />

						<input type="submit" name="soumission" value="valider">
					</div>
				</form>
</body>
          <?php


          if (!empty($_POST)) {
            $pdo1 = new PDO("mysql:host=localhost;dbname=48hproject", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); 
            $_POST["Name1"] = htmlentities($_POST["Name"], ENT_QUOTES);
            $_POST["Type1"] = htmlentities($_POST["Type"], ENT_QUOTES);
            $_POST["Product1"] = htmlentities($_POST["Product"], ENT_QUOTES);
            $_POST["Human1"] = htmlentities($_POST["Human"], ENT_QUOTES);
            $_POST["Image1"] = htmlentities($_POST["Image"], ENT_QUOTES);
            
            
            $pdo1->exec("INSERT INTO images (Name, Type, Product, Human,  Image) VALUES ('$_POST[Name]', '$_POST[Type]', '$_POST[Product]', '$_POST[Human]', '$_POST[Image]' );");
            echo "Donnée(s) Enregister";
            header('Refresh: 0');
          }


          ?>
    

	<?php
    
    require __DIR__. '/html/footer.html';
    
?>