<?php
namespace Imooc;

abstract class Controller
{
    protected $data;
    protected $controller_name;
    protected $view_name;

    /**
     * 控制器构造方法
     *
     * @author Red-Bo
     * @date   2016-07-17
     * @param  string   $controller_name 控制器的名称
     * @param  string   $view_name       视图的名称
     */
    public function __construct($controller_name,$view_name)
    {
        $this->controller_name  = $controller_name;
        $this->view_name        = $this->view_name;
        $this->template_dir     = Application::getInstance()->base_dir.'/templates';
    }

    /**
     * 赋值函数
     *
     * @author Red-Bo
     * @date   2016-07-01
     *
     * @param  string     $key   [变量名]
     * @param  void       $value [需要传递的值]
     * @return
     */
    public function assign($key,$value)
    {
        $this->data[$key] = $value;
    }

    /**
     * 变量赋值
     * @author Red-Bo
     * @date   2016-07-01
     * @param  string  $file [模板文件名称]
     * @return
     */
    public function display($file)
    {
        if(empty($file))
        {
            $file = strtolower($this—>controller_name).'/'.$this->view_name.'.php';
        }
        $path = $this->template_dir.'/'.$file;
        extract($this->data);
        include_once $path;
    }
}
