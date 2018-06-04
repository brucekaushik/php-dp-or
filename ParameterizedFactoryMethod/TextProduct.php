<?php
namespace TextAndGraphics;

class TextProduct implements Product
{
    private $mfgProduct;
    
    public function getProperties()
    {
        $this->mfgProduct = "This is text.";
        return $this->mfgProduct;
    }
}
