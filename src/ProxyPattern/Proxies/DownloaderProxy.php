<?php

namespace App\ProxyPattern\Proxies;

use App\ProxyPattern\Interfaces\Downloader;
use App\ProxyPattern\SimpleDownloader;

class DownloaderProxy implements Downloader
{
    protected $downloader;

    protected $cache = [];

    public function __construct(SimpleDownloader $simpleDownloader)
    {
        $this->downloader = $simpleDownloader;
    }

    public function download(string $url)
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieve result from cache.\n";
        }
        return $this->cache[$url];
    }
}
