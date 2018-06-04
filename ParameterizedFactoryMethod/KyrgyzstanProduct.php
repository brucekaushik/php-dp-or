<?php

class KyrgyzstanProduct implements Product
{
    private $mfgProduct;
    
    public function getProperties()
    {
        $this->mfgProduct = "<h1>Kyrgyzstan</h1>";
        $this->mfgProduct .= "<img src='imgs/Kyrgyzstan.png' width='500' height='500' />";
        return $this->mfgProduct;
    }
}
