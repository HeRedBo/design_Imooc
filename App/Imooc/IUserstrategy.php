<?php
namespace Imooc;

/**
 * 用户策略接口类
 * 定义广告语还有分类两个展示方法
 */
interface IUserstrategy
{
    function showAd();
    function showCategory();
}
