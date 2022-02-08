<?php

namespace aorocoin\System;

/**
 * Provides single block definition.
 */
interface BlockInterface {

  /**
   * Checks for block validity.
   */
  public function isValid();

  /**
   * Calculates block hash.
   */
  public function calculateHash();

}
