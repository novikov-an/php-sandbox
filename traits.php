<?php

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100) * $price);
    }
}

class ShopProduct {
    use PriceUtilities;
}

$p = new ShopProduct();
print $p->calculateTax(230) . "\n";
