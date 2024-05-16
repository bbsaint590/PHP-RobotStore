<?php
require_once './src/Entities/Product.php';
require_once './src/Entities/Models/StoreModel.php';
require_once './src/Factories/PdoFactory.php';

$db = PdoFactory::connect();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = StoreModel::getProductsById($_GET['id'], $db);
    echo '
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
<div class="containerbyid">';

        echo  $productId->displayById();'
</div>

</body>
</html>';
} else {
    echo '<h1>Invalid ID</h1>';
}
?>

