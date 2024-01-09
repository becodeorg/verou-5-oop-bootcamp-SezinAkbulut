<?php
require "../Use-Case-#1/with-classes.php";



class DiscountableItem extends BasketItem
{
    public $discount;

    public function applyDiscount()
    {
        $this->price *= (1 - $this->discount);
    }
}

$basket = [
    new DiscountableItem('Bananas', 6, 1),
    new DiscountableItem('Apples', 3, 1.5),
    new DiscountableItem('Wine', 2, 10),
];

foreach ($basket as $item) {
    // Apply 50% discount only to fruits
    if ($item->name !== 'Wine') {
        $item->discount = 0.5;
        $item->applyDiscount();
    }
}


$totalPriceWithDiscount = $fruitTax = $wineTax = 0;

foreach ($basket as $item) {
    //Total price of fruit with %50 discount
    $totalPriceWithDiscount += $item->calculateTotal();

    // Calculate tax separately for fruits and wine
    if ($item->name !== 'Wine') {
        $fruitTax += $item->calculateTax();
    } else {
        $wineTax += $item->calculateTax();
    }
}

echo "<br>";
echo "Bananas with 50% discount: €" . ($basket[0]->price) . "\n";
echo "<br>";
echo "Apples with 50% discount: €" . ($basket[1]->price) . "\n";
echo "<br>";
echo "Total Price with 50% Fruit Discount: €$totalPriceWithDiscount\n";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Tax on Fruit: €$fruitTax\n";
echo "<br>";
echo "Tax on Wine: €$wineTax\n";
echo "<br>";
echo "<br>";
echo "Total Price with 50% Fruit Discount and Tax: €" . ($totalPriceWithDiscount + $fruitTax + $wineTax) . "\n";
