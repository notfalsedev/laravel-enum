<?php

namespace Artisaninweb\Enum\Facades;

/**
 * Class EnumFacade
 *
 * @package Artisaninweb\Enum\Facades
 */
class EnumFacade extends \Illuminate\Support\Facades\Facade {

  /**
   * {@inheritDoc}
   */
  protected static function getFacadeAccessor()
  {
    return 'EnumMap';
  }

}
