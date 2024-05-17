<?php

require_once './src/Services/Services.php';
class Product
{
    private int $id;
    private string $title;
    private float $price;
    private string $image;
    private int $category_id;
    private string $category;
    private int $character_id;
    private string $character;
    private string $description;
    private string $image2;
    private string $image3;

//    private function getPrice()
//    {   $price = $this->price;
//        $decimalPrice = number_format($price,2);
//        return $decimalPrice;
//    }

//    private function getCategory()
//    {   $category = $this->category;
//        $noPlural = rtrim($category,1);
//        return $noPlural;
//    }
    public function display()
    {
        return '
        <div class="productbox">
    <a class="link" href="./Productpage.php?id=' . $this->id . '" >
        <img class="productimage" src="' . $this->image . '">
        
            <p>' . $this->title . '</p>
        <p>' . Services::getCurrency($this->price, 'en-GB', "GBP") . '</p>
    </a> </div>';
    }
    public function displayById()
    {
        return
        '<div class="productimageboxbyid">
        <img class="productimagebyid" src="' . $this->image . '">
        </div>
            <div class="productboxbyid">
                <h2>' . $this->title . '</h2>
                <h2>' . Services::getCurrency($this->price, 'en-GB', "GBP") . '</h2>
                <p>' . $this->description . '</p>
            </div>';
    }
}