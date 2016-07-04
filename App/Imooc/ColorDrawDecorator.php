<?php
namespace Imooc;
class ColorDrawDecorator implements IDrawDecorator
{
    protected $color;

    public function __construnct($color = "red")
    {
        $this->color = $color;
    }

    public function beforDraw()
    {
        echo "<div style='color: {$this->color}; width:100px;height:100px;'>";
    }

    public function afterDraw()
    {
        echo "</div>";
    }
}
