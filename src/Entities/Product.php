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
        return '<div>' .
            '<img src="' . $this->image . ';">' .
            '<p>' . $this->title . '</p>' .
            '<p>' . $this->category . '</p>' .
            '<p>$' . $this->price . '</p>' .
            '</div>';
    }
}
