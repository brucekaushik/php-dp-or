<?php

class Client
{
    private $countryFactory;
    
    public function __construct()
    {
        $this->countryFactory = new CountryFactory();

        echo $this->countryFactory->startFactory(new KyrgyzstanProduct()) . "<br/>";
        
        echo $this->countryFactory->startFactory(new MaliProduct()) . "<br/>";
    }
}
