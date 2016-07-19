<?php
namespace App\Decorator;

class Json
{
    public function beforeRequest()
    {

    }

    public function afterRequest($return_value = '')
    {
        if ($_GET['app'] =='json')
        {
            echo json_encode($return_value);
        }
    }
}
