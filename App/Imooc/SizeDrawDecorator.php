<?php
namespace Imooc;

class SizeDrawDecorator implements IDrawDecorator
{
    protected $size;

    public function __construct($zide = '14px')
    {
        $this->size = $size;
    }

    public function beforeDraw()
    {
        echo "<div style ='color:blue;font-size:{$this->size}'>";
    }
    
    public function afterDraw()
    {
        echo "<div>";
    }
}


 ?>
