<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryThirdPartyInterface;

class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{

    public function addMedia(string $pathToFile): string
    {
        dump(__METHOD__);
        return md5(__METHOD__ . $pathToFile);
    }

    public function getMedia(string $fileCode): string
    {
        dump(__METHOD__);
        return md5(__METHOD__ . $fileCode);
    }
}
