<?php
namespace Imooc;

class FemaleUserStrategy implements UserStrategy
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
