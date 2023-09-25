<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

class PropertyContainer
{
    private array $container = [];

    public function addProperty(string $name, mixed $value): void
    {
        $this->container[$name] = $value;
    }

    public function deleteProperty(string $name): void
    {
        unset($this->container[$name]);
    }

    public function getProperty(string $name): mixed
    {
        return $this->container[$name] ?? null;
    }

    /**
     * @throws \Exception
     */
    public function updateProperty(string $name, mixed $value): void
    {
        if (!$this->hasProperty($name)) {
            throw new \Exception("Property {$name} not found");
        }
        $this->container[$name] = $value;
    }

    public function hasProperty(string $name): bool
    {
        return array_key_exists($name, $this->container);
    }
}
