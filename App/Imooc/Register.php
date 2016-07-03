<?php
namespace Imooc;

/**
 * 注册树模式
 */
class Register
{
  protected static $object;

  /**
   * 注册方法
   *
   * @author Red-Bo
   * @date   2016-07-03
   * @param  string     $alias  [对象别名]
   * @param  string     $object [对象实例]
   */
  static function set($alias, $object)
  {
      self::$object[$alias] = $object;
  }

  /**
   * 将对象从注册数移除
   *
   * @author Red-Bo
   * @date   2016-07-03
   * @param  string     $alias  [对象别名]
   * @param  string     $object [对象实例]
   */
  public function _unset($alias)
  {
      unset(self::$object[$alias]);
  }

  /**
   * 获取注册器上的对象
   * @author Red-Bo
   * @date   2016-07-03
   * @param  [type]     $key [description]
   * @return [type]          [description]
   */
  static function get($key)
  {
      if(!isset(self::$object[$key]))
      {
          return FALSE;
      }
      return self::$object[$key];
  }
}

 ?>
