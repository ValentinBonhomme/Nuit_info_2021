<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
        <!--integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"-->
        <link rel="stylesheet" href="css/Autres.css">
        <meta charset="UTF-8">
        <title>nuit de l'info 2021</title>
    </head>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <body>
        
        <?php
            require_once(__DIR__.'/config/config.php');

            //chargement autoloader pour autochargement des classes
            require_once(__DIR__.'/config/Autoload.php');
            Autoload::charger();
             
            $cont = new Controleur();    
        ?>
    </body>
</html>
