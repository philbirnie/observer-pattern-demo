<?php

use Observers\Phil;
use Observers\Bill;

require_once('autoload.php');

/** @var Phil $phil */
$phil = new Phil();

$bill = new Bill();


$house = new House();
$house->attach($phil);
$house->attach($bill);


$chocolateIceCream = new IceCream('chocolate');

$rockyRoadIceCream = new IceCream('Rocky Road');

$rumRaisinIceCream = new IceCream('Rum Raisin');

$house->handleIceCreamArrival($chocolateIceCream);
$house->handleIceCreamArrival($rockyRoadIceCream);
$house->handleIceCreamArrival($rumRaisinIceCream);

