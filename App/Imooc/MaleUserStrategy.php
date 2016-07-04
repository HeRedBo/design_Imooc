<?php
namespace Imooc;

use Imooc\IUserstrategy;
/**
 * 男性广告分类展示
 */
class MaleUserStrategy implements IUserstrategy
{

    function showAd()
    {
        echo "最新IPhone手机";
    }

    function showCategory()
    {
        echo '数码产品';
    }
}
