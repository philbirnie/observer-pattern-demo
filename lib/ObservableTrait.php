<?php

trait ObservableTrait {

  protected $observers = [];

  public function attach(Observer $observer) {
    $this->observers[] = $observer;
  }

  public function detach(Observer $observer) {
    $this->observers = array_filter($this->observers, function($o) use($observer) {
      return $o !== $observer;
    });
  }

  public function notify($object) {
    /** @var \Observer $o */
    foreach($this->observers as $o) {
      $o->update($object);
    }
  }

}
