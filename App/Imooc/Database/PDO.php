<?php
namespace Imooc\Database;
use Imooc\Database\IDatabase;

class PDO implements IDatabase
{
    function connect($host, $user, $passwd, $dbname)
    {
        $dsn = "mysql:host=$host;dbname=$dbname"; // 数据源
        $conn = new \PDO($dsn, $user, $passwd);
        $conn->exec('set names utf8');
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}
