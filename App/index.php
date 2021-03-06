<?php
# 定义项目根目录常量
define('BASEDIR',__DIR__);
# 载入文件载入方法
include BASEDIR.'/Imooc/Loader.php';
# 载入函数在注册到php函数库
spl_autoload_register("\\Imooc\\Loader::autoload");

Imooc\Application::getInstance()->dispatch();




# 装饰器模式(start)
// $canvas = new Imooc\Canvas();
// $canvas->init();
// $canvas->addDecorator(new \Imooc\ColorDrawDecorator('green'));
// $canvas->addDecorator(new \Imooc\SizeDrawDecorator('20px'));
// $canvas->rect(4,6,4,12);
// $canvas->draw();
# 装饰器模式(end)






# 原型模式演示代码（start）
// $prototype = new Imooc\Canvas();
// $prototype->init();
//
// $canvas1 = clone $prototype;
// $canvas1->rect(3,6,4,12);
// $canvas1->draw();
// echo "===================<br/>";
// $canvas2 = clone $prototype;
// $canvas2->init();
// $canvas2->rect(3,6,4,12);
// $canvas2->draw();
# 原型模式在于减少内存开销，提高代码的运行速度
# 原型模式演示代码（end）


// # 观察者模式演示代码 (start)
// class Event extends \Imooc\EventGenerator
// {
//     function trigger()
//     {
//         echo "trigger\n";
//         $this->notify();
//
//     }
// }
//
// # 观察者1
// class Observer1 implements \Imooc\IObserver
// {
//     function update($event_info = NULl)
//     {
//         echo "业务逻辑1<br/>\n";
//     }
// }
//
// # 观察者2
// class Observer2 implements \Imooc\IObserver
// {
//     function update($event_info = NULl)
//     {
//         echo "业务逻辑2<br/>\n";
//     }
// }
// $event = new Event;
// $event->addObserver(new Observer1);
// $event->addObserver(new Observer2);
// $event->trigger();

# 观察者模式演示代码 (end)









#App\Controller\Home\Index::test();
# demo01 工厂模式
#$db = Imooc\Factory::createDatebase();
#var_dump($db);exit;

#  注册器模式测试代码
// $db = \Imooc\Register::get('db');
// var_dump($db);exit;

# 适配器
# $db = new Imooc\Database\MySQL();
#$db = new Imooc\Database\MySQLi();
#$db = new Imooc\Database\PDO();
#$db->connect('localhost','root','root','phpdesign');

// 数据库连接demo
// $db = new Imooc\Database\PDO();
// $db->connect('127.0.0.1','root','root','demo');
// $db->query('select * from test');
// // $db->close();
//
// $user = \Imooc\User(1);
//
// $user->username = 'HeRedBo';
// $user->password = 'password';
// $user->mobile_phone = '112341234';



// class Page
// {
//     protected $strategy;
//
//     public function index()
//     {
//         echo "AD:";
//         $this->strategy->showAd();
//         echo "<hr>";
//
//         echo "Category:";
//         $this->strategy->showCategory();
//     }
//
//     public function setStrategy(\Imooc\IUserStrategy $strategy)
//     {
//         $this->strategy = $strategy;
//     }
// }
//
// $page = new Page();
// if(isset($_GET['female']))
// {
//     $strategy = new \Imooc\MaleUserStrategy();
// }
// else
// {
//     $strategy = new \Imooc\FemaleUserStrategy();
// }
// $page->setStrategy($strategy);
// $page->index();
