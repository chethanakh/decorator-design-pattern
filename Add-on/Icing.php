<?php
require_once('./CakeDecorator.php');
class Icing extends CakeDecorator{
    function getPrice(): float
    {
        return $this->cake->getPrice()+20;
    }
}