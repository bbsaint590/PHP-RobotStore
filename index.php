<?php
require_once './src/Entities/Product.php';
require_once './src/Entities/Models/StoreModel.php';
require_once './src/Factories/PdoFactory.php';

$db = PdoFactory::connect();
$products = StoreModel::getProducts($db);

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
<div class="maincontainer">
    <div class="filter">
        <h3>Categories</h3>
        <form>
            <label for="aproncheck">
                <input type="checkbox" id="aproncheck" name="aproncheck" value="aproncheck">Aprons</label><br>
            <label for="basecheck">
                <input type="checkbox" id="basecheck" name="basecheck" value="basecheck">Baseball Hats</label><br>
            <label for="mugs">
                <input type="checkbox" id="mugs" name="mugs" value="mugs">Mugs</label><br>
            <label for="tee">
                <input type="checkbox" id="tee" name="tee" value="tee">T-shirts</label><br>
        </form>
        <h3>Characters</h3>
        <form>
            <label for="bubbles">
                <input type="checkbox" id="bubbles" name="bubbles" value="bubbles">Bubbles</label><br>
            <label for="dolres">
                <input type="checkbox" id="dolres" name="dolres" value="dolres">Dolres</label><br>
            <label for="fred">
                <input type="checkbox" id="fred" name="fred" value="fred">Fred</label><br>
            <label for="rex">
                <input type="checkbox" id="rex" name="rex" value="rex">Rex</label><br>
        </form>
    </div>
<div class="container">

        <?php
        foreach ($products as $product) {
            echo  $product->display();
        }
        ?>

</div>

</div>
</body>
</html>






