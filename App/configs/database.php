<?php

// 配置读写分离
$config = [
    'master' => [
        'type'      => 'MySQL',
        'host'      => '127.0.0.1',
        'user'      => 'root',
        'password'  => 'root',
        'dbname'    => 'test',
    ],
    'slave' => [
        'slave' => [
            'type'      => 'MySQL',
            'host'      => '127.0.0.1',
            'user'      => 'root',
            'password'  => 'root',
            'dbname'    => 'test',
        ]
    ],

]


 ?>
