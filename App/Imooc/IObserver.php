<?php
namespace Imooc;

interface IObserver
{
    function update($event_info = NULL);
}
