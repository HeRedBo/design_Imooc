<?php
namespace Imooc;

/**
 * 颜色装饰器
 */
class ColorDrawDecorator implements IDrawDecorator
{
    protected $color;

    public function __construct($color = "red")
    {
        $this->color = $color;
    }

    public function beforeDraw()
    {
        echo "<div style='color: {$this->color};'>";
    }

    public function afterDraw()
    {
        echo "</div>";
    }
}
