<?php
require_once("../controllers/add_product_controller.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./add.css">
    <link href="./css/main.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<nav>
<ul id="navbar" style="">
            <li><a href="#">admin</a></li>
            <li><a href="#">add product</a></li>
            <li><a href="#">add catigory</a></li>
            <li><a href="#">clients</a></li>
            <li><a href="#">comends</a></li>
        </ul>
</nav>
    <h1 class="titel">add products</h1>
    <form action="../controllers/add_product_controller.php" method="POST">
    <div class="tuplate">
    <input class="inp" placeholder="reference ..." name="value1" type="text">
    <input class="inp" placeholder="libelle ..." name="value2" type="text">
    <input class="inp" placeholder="code bar ..." name="value3" type="text">
    <input class="inp" placeholder="prix d achat ..." name="value4" type="text">
    <input class="inp" placeholder="prix final ..." name="value5" type="text">
    <input class="inp" placeholder="prix ofer ..." name="value6" type="text">
    <input class="inp" placeholder="photo ..." name="value7" type="text">
    <input class="inp" placeholder="catigorie..." name="value8" type="text">  
    <button class="btn1 bg-blue-700" type="submit" name="submit">Add</button>
    </div>
</form>

</body>
</html>