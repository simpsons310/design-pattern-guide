<?php

namespace App\ProxyPattern\Interfaces;

interface Downloader
{
    public function download(string $url);
}
