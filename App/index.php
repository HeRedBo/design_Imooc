<?php
# 定义项目根目录常量
define('BASEDIR',__DIR__);

# 载入文件载入方法
include BASEDIR.'/Imooc/Loader.php';

# 载入函数在注册到php函数库
spl_autoload_register("\\Imooc\\Loader::autoload");
#App\Controller\Home\Index::test();


// 数据库连接demo
// $db = new Imooc\Database\PDO();
// $db->connect('127.0.0.1','root','root','demo');
// $db->query('select * from test');
// $db->close();


?>
