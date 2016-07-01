<?php
$config = [
    'home' => [
        'decorator' => [
            'App\Decorator\Login',
            'App\Decorator\Template',
            'App\Decorator\Json',
        ],
    ],
    'default' => 'defaultController',
];

return $config;

 ?>
