<?php

declare(strict_types=1);

class Product
{
    public string $title;
    public float $price;
    public int $quantity;
    public float $total;

    public function calculTotal() : float
    {
        return $this->total = $this->price * $this->quantity;
    }
}

$commode = new Product();

$commode->title = "Commode en béton armé";
$commode->price = 25;
$commode->quantity = 5; 
$commode->calculTotal(); 




$chaise = new Product();

$chaise->title = "Chaise ultra confortable";
$chaise->price = 10;
$chaise->quantity = 15;
$chaise->calculTotal();

echo "<p>Les ". $commode->title." coutent au total : " . $commode->total . "€</p>";

echo "<p>Les ". $chaise->title." coutent au total : " . $chaise->total . "€</p>";