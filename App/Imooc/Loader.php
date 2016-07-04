<?php
namespace Imooc;

class Loader
{
    /**
     * 类的自动载入静态方法
     * @author Red-Bo
     * @date   2016-06-23
     * @param  [type]     $class [description]
     * @return [type]            [description]
     */
    static function autoload($class)
    {
        //var_dump($class);
        require_once BASEDIR.'/'.str_replace('\\','/',$class).'.php';


    }
}


 ?>
