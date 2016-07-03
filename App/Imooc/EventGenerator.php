<?php
namespace Imooc;

abstract class EventGenerator
{
    private $observers  = [];

    /**
     * 添加观察者
     * @author Red-Bo
     * @date   2016-07-03
     * @param  IObserver  $observer [观察者对象]
     */
    function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 观察者通知方法
     * @author Red-Bo
     * @date   2016-07-03
     */
    function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}
