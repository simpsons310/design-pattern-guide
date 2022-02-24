<?php

namespace App\BridgePattern\Renderers;

use App\BridgePattern\Interfaces\Renderer;

class HtmlRenderer implements Renderer
{
    public function renderTitle($title)
    {
        return "<h1>$title</h1>";
    }

    public function renderTextBlock($text)
    {
        return "<div class='text'>$text</div>";
    }

    public function renderImage($url)
    {
        return "<img src='$url'>";
    }

    public function renderLink($url, $title)
    {
        return "<a href='$url'>$title</a>";
    }

    public function renderHeader()
    {
        return "<html><body>";
    }

    public function renderFooter()
    {
        return "</body></html>";
    }

    public function renderParts(array $parts)
    {
        echo implode("\n", $parts) . "\n";
    }
}
