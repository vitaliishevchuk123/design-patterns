<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryInterface;
use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryThirdPartyInterface;

class MediaLibraryAdapter implements MediaLibraryInterface
{
    private MediaLibraryThirdPartyInterface $adapterObj;

    public function __construct()
    {
        $this->adapterObj = new MediaLibraryThirdParty();
    }

    public function upload(string $pathToFile): string
    {
        return $this->adapterObj->addMedia($pathToFile);
    }

    public function get(string $fileCode): string
    {
        return $this->adapterObj->getMedia($fileCode);
    }

    /**
     * @throws \Exception
     */
    public function __call(string $name, array $arguments)
    {
        if (!method_exists($this->adapterObj, $name)) {
            throw new \Exception("Method {$name} not found!");
        }
        return call_user_func_array([$this->adapterObj, $name], $arguments);
    }
}
