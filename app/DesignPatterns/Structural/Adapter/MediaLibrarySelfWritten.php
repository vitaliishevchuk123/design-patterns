<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryInterface;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{
    public function upload(string $pathToFile): string
    {
        dump(__METHOD__);
        return md5(__METHOD__ . $pathToFile);
    }

    public function get(string $fileCode): string
    {
        dump(__METHOD__);
        return md5(__METHOD__ . $fileCode);
    }
}
