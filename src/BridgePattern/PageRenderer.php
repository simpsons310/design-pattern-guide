<?php

namespace App\BridgePattern;

use App\BridgePattern\Pages\ProductPage;
use App\BridgePattern\Pages\SimplePage;
use App\BridgePattern\Products\Product;
use App\BridgePattern\Renderers\HtmlRenderer;
use App\BridgePattern\Renderers\JsonRenderer;

class PageRenderer
{
    public function __construct()
    {
        $htmlRenderer = new HtmlRenderer();
        $jsonRenderer = new JsonRenderer();

        echo "Simple Page HTML View\n";
        $page = new SimplePage($htmlRenderer, 'Home', 'Welcome to our website!');
        $page->view();

        echo "\nSimple Page JSON View\n";
        $page->changeRenderer($jsonRenderer);
        $page->view();

        $product = new Product(
            '123',
            'Star war, episode1',
            'A long time ago in a galaxy far, far away...',
            '/images/star-wars.jpeg',
            62.25
        );
        echo "\nProduct Page HTML View\n";
        $page = new ProductPage($htmlRenderer, $product);
        $page->view();

        echo "\nProduct Page JSON View\n";
        $page->changeRenderer($jsonRenderer);
        $page->view();
    }
}
