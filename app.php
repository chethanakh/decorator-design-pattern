<?php
require_once("./CakeType/PlainCake.php");
require_once("./CakeType/ChocolateCake.php");
require_once("./CakeType/PolCake.php");
require_once("./Add-on/Icing.php");
require_once("./Add-on/Pebals.php");
require_once("./Add-on/Sprinkles.php");

$isAddedSprinkles=true;
$isAddedPebals=false;
$isAddedIcing=false;

$cakeType="PolCake";
// $cakeType="ChocolateCake";
// $cakeType="PlainCake";

switch ($cakeType) {
    case 'PolCake':
        $cake = new PolCake();
        break;

    case 'ChocolateCake':
        $cake = new ChocolateCake();
        break;
    case 'PlainCake':
        $cake = new PlainCake();
        break;
    default:
        $cake = new PlainCake();

        break;
}

if ($isAddedSprinkles) {
    $cake= new Sprinkles($cake);
}

if ($isAddedPebals) {
    $cake= new Pebals($cake);
}

if ($isAddedIcing) {
    $cake= new Icing($cake);
}
echo "\n";
echo $cake->getPrice();
echo "\n";
echo "\n";

