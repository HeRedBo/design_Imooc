<?php
namespace Imooc\Database;

/**
 * 适配器模式demo 
 * 数据库操作接口类
 * 定义操作数据库的相关操作接口
 */
interface IDatabase
{

    function connect($host, $user, $passwd , $dbname);
    function query($sql);
    function close();

}
