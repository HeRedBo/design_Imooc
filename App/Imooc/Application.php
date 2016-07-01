<?php
namespace Imooc;

/**
 *
 */
class Application
{
    public $base_dir;
    protected static $instance;

    /**
     * 类初始化函数
     * @author Red-Bo
     * @date   2016-06-30
     * @param  string   $base_dir [文件路径]
     */
    function __construct($base_dir)
    {
        $this->base_dir = $base_dir;
        $this->config   = new Config($base_dir);
    }

    /**
     * 获取对象的静态方法
     *
     * @author Red-Bo
     * @date   2016-06-30
     * @param  string     $obj [description]
     * @return object          [description]
     */
    static function getInstance($obj = '')
    {
            if(empty(self::$instance))
            {
                self::$instance = new self($obj);
            }
            return self::$instance;
    }

    function dispath()
    {
        $uri = $_SERVER['SCRIPT_NAME'];
        list($c,$v) = explode('/',trim($uri,'/'));

        $c_low = strtolower($c);
        $c     = ucwords($c); //首字母大写
        $class = '\\App\\Controller\\'.$c;
        $obj   = new $class($c,$v);

        $controller_config = $this->config['controller'];
        $decorators = [];
        if(isset($controller_config[$c_low]['decorator']))
        {
            $conf_decorator  = $controller_config[$c_low]['decorator'];

            foreach ($conf_decorator as $class)
            {
                $decorators[] = new $class;
            }

            foreach ($decorators as $decorator)
            {
                $decorator->beforeRequest($obj);
            }
            $return_value = $obj->$v();

            foreach ($$decorators as $decorator)
            {
                $decorator->afterRequest();
            }

        }





    }

}


 ?>
