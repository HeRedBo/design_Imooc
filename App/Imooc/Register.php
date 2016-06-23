<?php
namespace Imooc;

/**
 * 注册树木
 */
class Register
{
  protected static $object;


  static function set($alias, $object)
  {
      self::$object[$alias] = $object;
  }

  public function _unset($alias)
  {
      unset(self::$object[$alias]);
  }

}

 ?>
