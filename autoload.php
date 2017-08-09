<?php

/**
 * Autoload Script
 */

spl_autoload_register(function($className) {
  /** @var string $classPath */
  $classPath = __DIR__ . '/lib/' . str_replace( '\\', '/', $className ) . '.php';

  if ( file_exists( $classPath ) ) {
    include_once $classPath;
  }
}, false, false);
