<?php
namespace App\Decorator;

class Login
{
    public function beforeRequest($controller)
    {
        session_start();
        // 判断用户是否已经登录 如果没有 跳转到登录页面
        if (empty($_SESSION['isLogin']))
        {
            header("locaion: /Login/index/");
            exit;
        }
    }

    public function afterRequest($return_value)
    {
        
    }
}
