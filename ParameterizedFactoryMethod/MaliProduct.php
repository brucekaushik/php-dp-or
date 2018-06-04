<?php

class MaliProduct implements Product
{
    private $mfgProduct;
    
    public function getProperties()
    {
        $this->mfgProduct = "<h1>Mali</h1>";
        $this->mfgProduct .= "<img src='imgs/Mali.png' width='500' height='500' />";
        return $this->mfgProduct;
    }
}
