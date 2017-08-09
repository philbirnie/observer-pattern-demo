<?php

class IceCream {

  private $flavor;

  /**
   * IceCream constructor.
   *
   * @param $flavor
   */
  public function __construct($flavor) {
    $this->flavor = $flavor;
  }

  public function eat() {
    var_dump('Yum!');
  }

  public function putInFreezer() {
    var_dump('Thank you for putting me away');
  }

  /**
   * @return mixed
   */
  public function getFlavor() {
    return $this->flavor;
  }
}
