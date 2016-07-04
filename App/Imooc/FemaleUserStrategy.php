<?php
namespace Imooc;
use Imooc\IUserStrategy;
/**
 * 女性广告分类展示类
 */
class FemaleUserStrategy implements IUserstrategy
{

    function showAd()
    {
        echo "2016新款女包";
    }

    function showCategory()
    {
        echo '女装';
    }
}
