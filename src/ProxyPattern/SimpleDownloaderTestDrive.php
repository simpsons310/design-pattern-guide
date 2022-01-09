<?php

namespace App\ProxyPattern;

use App\ProxyPattern\Proxies\DownloaderProxy;
use App\ProxyPattern\SimpleDownloader;

class SimpleDownloaderTestDrive
{
    public function __construct()
    {
        $downloader = new SimpleDownloader();
        echo "Executing client code with real subject:\n";
        $downloader->download('http://example.com/');
        $downloader->download('http://example.com/');

        echo "\n";
        echo "Executing the same client code with a proxy:\n";
        $proxy = new DownloaderProxy($downloader);
        $proxy->download('http://example.com/');
        $proxy->download('http://example.com/');
    }
}
