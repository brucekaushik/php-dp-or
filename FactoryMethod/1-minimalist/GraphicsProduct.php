<?php

namespace TextAndGraphics;

class GraphicsProduct implements Product
{
    private $mfgProduct;
    
    public function getProperties()
    {
        $this->mfgProduct = "This is a graphic.";
        return $this->mfgProduct;
    }
}
