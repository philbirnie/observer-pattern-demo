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
    echo 'Yum!';
  }

  public function putInFreezer() {
    echo 'Thank you for putting me away';
  }

  /**
   * @return mixed
   */
  public function getFlavor() {
    return $this->flavor;
  }
}
