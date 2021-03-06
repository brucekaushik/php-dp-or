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
        
        $this->someGraphicObject = new GraphicsFactory();
        echo $this->someGraphicObject->startFactory() . "<br/>";
    }
}
