<?php
namespace Imooc\Database;
use Imooc\IDatabase;

class MySQLi
{
    protected $conn;

    function connect($host,$user,$passwd,$dbname)
    {
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        mysqli_query($conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}


 ?>
