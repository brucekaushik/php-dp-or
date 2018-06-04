<?php

namespace TextAndGraphics;

class GraphicsFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicsProduct();
        return($product->getProperties());
    }
}
