<?php
class Product
{
    private int $id;
    private string $title;
    private float $price;
    private string $image;
    private int $catergory_id;
    private string $category;
    private int $character_id;
    private string $character;
    private string $description;
    private string $image2;
    private string $image3;
    public function display()
    {
        return '
        <div class="productbox">
    <a class="link" href="http://localhost:1234/module-05/PHP-RobotStore/Productpage.php?id=' . $this->id . '" >
        <img class="productimage" src="' . $this->image . '">
        
            <p>' . $this->title . '</p>
        <p>' . $this->category . '</p>
        <p>$' . $this->price . '.00</p>
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
                <h2>$' . $this->price . '.00</h2>
                <p>' . $this->description . '</p>
            </div>';
    }
}