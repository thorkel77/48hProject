<?php

        require __DIR__. '/html/form.html';


          if (!empty($_POST)) {
              //*** /
              // Insetion
              $pdo1 = new PDO("mysql:host=localhost;dbname=48hproject", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
              $_POST["Name1"] = htmlentities($_POST["Name"], ENT_QUOTES);
              $_POST["Type1"] = htmlentities($_POST["Type"], ENT_QUOTES);
              $_POST["Product1"] = htmlentities($_POST["Product"], ENT_QUOTES);
              $_POST["Human1"] = htmlentities($_POST["Human"], ENT_QUOTES);
              $_POST["institutional 1"] = htmlentities($_POST["institutional "], ENT_QUOTES);
              $_POST["Format1"] = htmlentities($_POST["Format"], ENT_QUOTES);
              $_POST["Crédit1"] = htmlentities($_POST["Crédit"], ENT_QUOTES);
              $_POST["Rights 1"] = htmlentities($_POST["Rights "], ENT_QUOTES);
              $_POST["Copyright1"] = htmlentities($_POST["Copyright"], ENT_QUOTES);
              $_POST["Image1"] = htmlentities($_POST["Image"], ENT_QUOTES);
              $_POST["end_date 1"] = htmlentities($_POST["end_date"], ENT_QUOTES);
              $pdo1->exec("INSERT INTO images (Name,Type,Product,Human,institutional,Format,Crédit,Rights,Copyright,Image,end_date) VALUES ('$_POST[Name]', '$_POST[Type]', '$_POST[Product]','$_POST[Human]','$_POST[institutional]','$_POST[Format]','$_POST[Crédit]','$_POST[Rights]','$_POST[Copyright]','$_POST[Copyright]','Image/$_POST[Image]','$_POST[end_date]' );");

              echo "Donnée(s) Enregister";
              header('Refresh: 0');
              //** */
          }


          ?>
