<?php
namespace Imooc\Database;
use Imooc\Database\IDatabase;

class MySQLi
{
    protected $conn;

    function connect($host,$user,$passwd,$dbname)
    {
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        mysqli_query($conn,'set names utf8');
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}


 ?>
