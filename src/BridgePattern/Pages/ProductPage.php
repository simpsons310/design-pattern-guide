<?php

namespace App\BridgePattern\Pages;

use App\BridgePattern\Interfaces\Renderer;
use App\BridgePattern\Products\Product;

class ProductPage extends Page
{
    protected Product $product;

    public function __construct(Renderer $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view()
    {
        $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTitle()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderImage($this->product->getImage()),
            $this->renderer->renderLink('/cart/add/' . $this->product->getId(), 'Add to Cart'),
            $this->renderer->renderFooter()
        ]);
    }
}
