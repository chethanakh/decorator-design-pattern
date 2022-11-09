<?php
require_once('./CakeDecorator.php');
class Sprinkles extends CakeDecorator{
    function getPrice(): float
    {
        return $this->cake->getPrice()+10;
    }
}