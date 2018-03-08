<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <title>made.in.ua</title>
    </head>
    <body>
        <div id="block-body">
            
            <?php
                include("./include/block-header.php");
                include ("./include/block-category.php");
            ?>
            
            <div id="block-max-width">
                <div id="block-slider"></div>
                <div id="block-about"></div>
                <div id="block-new-products"></div>
                <div id="block-popular"></div>
                <div id="block-img-category"></div>   
            </div>
            
            
            <?php
                include("./include/footer.php");
            ?>
            
        </div>
    </body>
</html>
