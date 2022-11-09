<?php
require_once('./Cake.php');
class PlainCake implements Cake{
    public function getPrice():float{
        return 100.00;
    }
}