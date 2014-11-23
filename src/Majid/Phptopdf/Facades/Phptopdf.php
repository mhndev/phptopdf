<?php namespace Majid\Phptopdf\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Phptopdf extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'phptopdf'; }
 
}