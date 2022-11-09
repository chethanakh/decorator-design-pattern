<?php
require_once('./CakeDecorator.php');
class Pebals extends CakeDecorator
{
    function getPrice(): float
    {
        $calPrice = $this->cake->getPrice() * 10 / 100;
        return $this->cake->getPrice() + $calPrice;
    }
}
