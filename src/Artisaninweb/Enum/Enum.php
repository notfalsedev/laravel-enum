<?php

namespace Artisaninweb\Enum;

/**
 * Class Enum
 *
 * @package Artisaninweb\Enum
 */
abstract class Enum extends \GerritDrost\Lib\Enum\Enum {

  /**
   * Enum object to string
   *
   * @return string
   */
  public function __toString()
  {
    return $this->getConstValue();
  }

}
