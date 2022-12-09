<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dynamisk Menu</title>
        <link rel="stylesheet" href="chefmee/styles.css">

        <style>
            #dmenu{
            display: flex;
            width: 100%;
            background-color: black;
            }
            #dmenu a{
            box-sizing: border-box;
            width:100%;
            padding: 10px;
            color: white !important;
            text-align: center;
            }
        </style>
    </head>

    <body>
        <nav id="dmenu"><?php
        //GET MENU ITEMS
        require "./menu.php";

        // DRAW MENU ITEMS 
        foreach ($items as $i) {
            echo "<a href='". $i['item_link'] ."'>";
            echo $i['item_text'];
            echo"</a>";
        }

        ?></nav>
    
    </body>
</html>