<?php

namespace  Observers;

class Bill implements \Observer {

  /**
   * @param \IceCream $object
   */
  public function update($object) {
    if($object->getFlavor() === 'chocolate') {
      $object->eat();
    } else {
      var_dump('No thanks - Bill will pass');
    }
  }

}
