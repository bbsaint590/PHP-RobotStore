<?php
require_once './src/Entities/Product.php';
require_once './src/Entities/Models/StoreModel.php';
require_once './src/Factories/PdoFactory.php';

$db = PdoFactory::connect();
$products = StoreModel::getProducts($db);
//$aprons = StoreModel::getProductsById([1,2,3,4], $db);

//echo '<ul>';
//foreach ($products as $product) {
//    echo $product->display();
//}
//echo '</ul>';
//echo '<ul>';
//foreach ($aprons as $apron) {
//    echo $apron->display();
//}
//echo '</ul>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
<div>
    <?php
    foreach ($products as $product) {
        echo $product->display();
    }
    ?>
</div>
</body>
</html>





