<?php
namespace IMooc;

class Factory
{
    static $proxy = null;
    static function createDatebase()
    {
        $db = Database::getInstance();
        Register::set('db',$db);
        return $db;
    }

    static function getModel($name)
    {
        $key = 'app_model_'.$name;
        $moel = Register::get($key);
        if(!$model)
        {
            $class = '\\App\\Model\\'.ucwords($name);
            $model = new $class;
            Register::sest($key,$model);
        }

        return $model;
    }

    static function getDatabase($name = 'proxy')
    {
        if($name == 'proxy')
        {
            if(!self::$proxy)
            {
                self::$proxy  = new \Imooc\Database\Proxy;
            }
            return self::$proxy;
        }

        $key = 'database_'.$name;
        if($name == 'slave')
        {
            $slaves = Application::getInstance()->config['database']['slave'];
            $db_config = $salves[array_rand($slaves)];
        }
        else
        {
            $db_config = Application::getInstance()->coonfig['database'][$name];
        }

        $db = Register::get($key);
        if(!$db)
        {
            $db = new Database\MySQLi();
        }

    }

}
 ?>
