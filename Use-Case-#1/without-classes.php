<?php

//A basket contains the following things:
$basket = [
    'Bananas' => ['quantity' => 6, 'price' => 1],
    'Apples' => ['quantity' => 3, 'price' => 1.5],
    'Wine' => ['quantity' => 2, 'price' => 10],
];

// Total price
$totalPrice = 0;
foreach ($basket as $item) {
    $totalPrice += $item['quantity'] * $item['price'];
}

// Calculate tax

$applesTax = $basket['Apples']['quantity'] * $basket['Apples']['price'] * 0.6;
$bananasTax = $basket['Bananas']['quantity'] * $basket['Bananas']['price'] * 0.6;
$wineTax = $basket['Wine']['quantity'] * $basket['Wine']['price'] * 0.21;

// Calculate total fruit price with tax
$fruitTax = $applesTax + $bananasTax;
// Calculate total price with tax
$totalPriceWithTax = $totalPrice +  $wineTax + $fruitTax;

echo "
<h3>Basket:</h3>
<p>
Banana's (6 pieces, costing €1 each)
<br>
Apples (3 pieces, costing €1.5 each)
<br>
Bottles of wine (2 bottles, costing €10 each)
</p>
<hr>";

echo "Total Price: €$totalPrice\n";
echo "<br>";
echo "<br>";
echo "Tax on Bananas: €$bananasTax\n";
echo "<br>";
echo "Tax on Apples: €$applesTax\n";
echo "<br>";
echo "Tax on Total Fruit: €$fruitTax\n (%0.6)";
echo "<br>";
echo "Tax on Wine: €$wineTax\n (%0.21)";
echo "<br>";
echo "<br>";
echo "Total Price with Tax: €$totalPriceWithTax\n";
