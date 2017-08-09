<?php

trait ObservableTrait {

  protected $observers = [];

  public function attach(Observer $observer) {
    $this->observers = [];
  }

  public function detach(Observer $observer) {
    $this->observers = array_filter($this->observers, function($o) use($observer) {
      return $o !== $observer;
    });
  }

  public function notify() {
    /** @var \Observer $o */
    foreach($this->observers as $o) {
      $o->update($this);
    }
  }

}
