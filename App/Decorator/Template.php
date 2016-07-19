<?php
namespace App\decorator;

class Template
{
    /**
     * @var \Imooc\Controller
     */
    protected $controller;

    public function beforeRequest($controller)
    {
        $this->controller = $controller;
    }

    public function afterRequest($return_value)
    {
        if($_GET['app'] == 'html')
        {
            foreach ($return_value as $k => $v)
            {
                $this->controller = assign($k, $v);
            }
            $this->controller = $display();
        }
    }
}
