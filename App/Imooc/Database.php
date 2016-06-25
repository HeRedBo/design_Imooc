<?php
namespace IMooc;

interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}

class Database
{

    //静态常量保存当前对象 (私有或者保护)
    private static $object;

    /**
     * 私有化构造函数
     * @author Red-Bo
     * @date   2016-06-23
     * @param  [type]     $arr [description]
     */
    private function __construct($arr = [])
    {

    }

    /**
     * 类静态的类获取方法
     * @author Red-Bo
     * @date   2016-06-23
     * @return [type]     [description]
     */
    public static function getInstace()
    {
        if(self::$object)
        {
            return self::$object;
        }
        self::$object = new self();
        return self::$object;
    }

    /**
     * 私有化克隆函数
     * @author Red-Bo
     * @date   2016-06-23
     * @return [type]     [description]
     */
    private function __clone()
    {

    }




    //php 链式操作demo 要返回$this;
    public function select()
    {

    }

    public function where($where)
    {

        return $this;
    }

    public function order($order)
    {

        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }


    public function join()
    {

    }
}
 ?>
