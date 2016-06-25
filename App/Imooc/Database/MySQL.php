<?php
namespace Imooc\Database;

use IMooc\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;

    public function connect($host,$user,$passwd,$dbname)
    {
        error_reporting(E_ALL^E_NOTICE);
        $conn = mysql_connect($host,$uer,$passwd);
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
