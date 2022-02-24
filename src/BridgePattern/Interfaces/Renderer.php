<?php

namespace App\BridgePattern\Interfaces;

interface Renderer
{
    public function renderTitle($title);

    public function renderTextBlock($text);

    public function renderImage($url);

    public function renderLink($url, $title);

    public function renderHeader();

    public function renderFooter();

    public function renderParts(array $parts);
}
