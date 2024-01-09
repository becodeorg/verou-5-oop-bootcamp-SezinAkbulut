<?php
class BasketItem
{
    public $name;
    public $quantity;
    public $price;

    public function __construct(string $name, int $quantity, float $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function calculateTotal(): float
    {
        return $this->quantity * $this->price;
    }

    public function calculateTax(): float
    {
        return $this->calculateTotal() * ($this->name !== 'Wine' ? 0.6 : 0.21);
    }
}

$basket = [
    'Bananas' => new BasketItem('Bananas', 6, 1),
    'Apples' => new BasketItem('Apples', 3, 1.5),
    'Wine' => new BasketItem('Wine', 2, 10),
];

$totalPrice = $fruitTax = $wineTax = 0;

foreach ($basket as $item) {
    $totalPrice += $item->calculateTotal();
    if ($item->name !== 'Wine') {
        $fruitTax += $item->calculateTax();
    } else {
        $wineTax += $item->calculateTax();
    }
}

$totalPriceWithTax = $totalPrice + $wineTax + $fruitTax;

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

echo "Total on Bananas: €{$basket['Bananas']->calculateTotal()}\n";
echo "<br>";
echo "Total on Apples: €{$basket['Apples']->calculateTotal()}\n";
echo "<br>";
echo "Total on Wines: €{$basket['Wine']->calculateTotal()}\n";
echo "<br>";
echo "<br>";
echo "Total Price: €$totalPrice\n";
echo "<br>";
echo "<br>";

echo "Tax on Bananas: €{$basket['Bananas']->calculateTax()}\n";
echo "<br>";
echo "Tax on Apples: €{$basket['Apples']->calculateTax()}\n";
echo "<br>";
echo "Tax on Total Fruit: €$fruitTax\n (%0.6)\n";
echo "<br>";

echo "Tax on Wine: €$wineTax\n (%0.21)\n";
echo "<br>";
echo "<br>";
echo "Total Price with Tax: €$totalPriceWithTax\n";
echo "<br>";
