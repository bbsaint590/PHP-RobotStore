<?php
require_once './src/Entities/Product.php';
require_once './src/Entities/Models/StoreModel.php';
require_once './src/Factories/PdoFactory.php';

$db = PdoFactory::connect();
$productId = StoreModel::getProductsById($id = $_GET['id'], $db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="src/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="containerbyid">
    <?php
        echo  $productId->displayById();
    ?>
</div>

</body>
</html>