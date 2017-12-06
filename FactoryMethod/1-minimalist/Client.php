<?php

namespace TextAndGraphics;

class Client
{
    private $someGraphicObject;
    private $someTextObject;
    
    public function __construct()
    {
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory() . "<br/>";
    }
}
