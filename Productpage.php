<?php
require_once './src/Entities/Product.php';
require_once './src/Entities/Models/StoreModel.php';
require_once './src/Factories/PdoFactory.php';

$db = PdoFactory::connect();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = StoreModel::getProductById($_GET['id'], $db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="src/normalize.css">
    <link href="src/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="containerbyid">

    <?php
    if ($productId !== false) {
        echo $productId->displayById();
    } else {
        echo '<h1>Product does not exist</h1>';
    }

    ?>

</div>
</body>
</html>

<?php

} else {
    echo '<h1>Invalid ID</h1>';
}
?>

