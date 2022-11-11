<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>PHP Products</title>
</head>
<body>
    <div id="tittle">
        <h1>Inventario de productos</h1>
    </div>
    <div id="inventory-father">
        <div id="inventory-container">
            <?php
                include("./services/get-all.php");
                $products = getAllProducts();
                echo $products;
            ?>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>