<?php

namespace TextAndGraphics;

class GraphicsProduct implements Product
{
    private $mfgProduct;
    
    public function getProperties()
    {
        $this->mfgProduct .= "<img src='imgs/Mali.png' width='500' height='500' />";
        return $this->mfgProduct;
    }
}
