<?php

namespace  Observers;

class Phil implements \Observer {

  /**
   * @param \IceCream $object
   */
  public function update($object) {
    if($object->getFlavor() === 'Rocky Road') {
      $object->eat();
    } else {
      var_dump('No thanks - Phil will pass');
    }
  }

}
