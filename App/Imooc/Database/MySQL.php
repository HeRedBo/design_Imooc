<?php
namespace Imooc\Database;

use IMooc\Database\IDatabase;
class MySQL implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        # 屏蔽mysql函数相关错误
        error_reporting(E_ALL &~E_NOTICE &~E_WARNING &~E_DEPRECATED);
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        mysql_query('set name utf8');
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}
