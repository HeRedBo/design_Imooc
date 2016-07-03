<?php
namespace Imooc;

use Imooc\Factory;

class Porxy
{
    function query()
    {
        if(substr($sql,0,6) == 'select')
        {
            echo '读取数据库:'.$sql.'<br/>';
            return Factory::getDatabase('salve')->query($sql);
        }
        else
        {
            echo "写操作：".$sql."<br/>";
            return Factory::getDatabase('master')->query($sql);
        }
    }
}
