<?php

namespace App\ProxyPattern;

use App\ProxyPattern\Interfaces\Downloader;

class SimpleDownloader implements Downloader
{
    public function download(string $url)
    {
        echo "Downloading a file from the Internet.\n";
        $result = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($result) . "\n";

        return $result;
    }
}
