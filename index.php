<?php

require_once('autoload.php');

$house = new House();

$chocolateIceCream = new IceCream('chocolate');

$rockyRoadIceCream = new IceCream('Rocky Road');

$rumRaisinIceCream = new IceCream('Rum Raisin');

$house->handleIceCreamArrival($chocolateIceCream);
$house->handleIceCreamArrival($rockyRoadIceCream);
$house->handleIceCreamArrival($rumRaisinIceCream);
