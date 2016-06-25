<?php
namespace Imooc;

class MaleUserStrategy implements UserStrategy
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
