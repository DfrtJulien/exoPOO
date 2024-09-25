<?php

declare(strict_types=1);

class Product
{
    private string $title;
    private float $price;
    private int $quantity;

    public function setTitle(string $title) : static
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle() : ?string
    {
        return $this->title;
    }

    public function setPrice(float $price) : static
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }

    public function setQuantity(int $quantity) : static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity() : ?int
    {
        return $this->quantity;
    }

    public function showProduct()
    {
        return "<p>$this->quantity  $this->title  vaut  $this->price €</p>";
    }
}

$chaise = new Product();
$chaise->setTitle('Chaise en peau de Licorne')->setPrice(5)->setQuantity(1);

echo '<p>' . $chaise->getQuantity() . ' ' . $chaise->getTitle() . ' vaut ' . $chaise->getPrice() . '€</p>';

$armoire = new Product();

$armoireTitle = $armoire->setTitle('Armoir motif cadavre de Licorn');
$armoirePrice = $armoire->setPrice(15);
$armoireQuantity = $armoire->setQuantity(3);
$armoirePhrase = $armoire->showProduct();

echo "<p>" . $armoirePhrase . "</p>";
