<?php
namespace Imooc;

class model
{
    protected $observer = [];

    function __contruct()
    {
        $name = strtolower(str_ireplace('App\Model\\','',get_class($this)));
        if(!empty(Application::getInstance()->config['model'][$name]['observer']))
        {
            $observers =
            Application::getInstance()->config['model'][$name]['observer'];
            foreach ($observers as $class)
            {
                $this->Observers[] =  new $class;
            }

        }
    }

    function notiy($event)
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($event);
        }
    }
}
