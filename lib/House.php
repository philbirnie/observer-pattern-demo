<?php

class House implements Observable {

  use ObservableTrait;

  protected $foodContents = [];

  public function handleIceCreamArrival(IceCream $iceCream) {
    $iceCream->putInFreezer();
    $this->foodContents[] = $iceCream;

    $this->notify();
  }
}
