<?php
namespace App\Controller;
use Imooc\Controller;
use Imooc\Factory;

/**
 * 首页控制器
 */
class Home extends Controller
{
    public function index()
    {
        $model  = Factory::getModel('User');
        $userId = $model->create(); 
    }
}
