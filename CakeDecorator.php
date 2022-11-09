<?php
require_once("./Cake.php");
abstract class CakeDecorator implements Cake{
    public Cake $cake;

    public function __construct(Cake $cake) {
        $this->cake = $cake;
    }
}