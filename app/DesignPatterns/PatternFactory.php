<?php

namespace App\DesignPatterns;

class PatternFactory
{
    public static array $available = [
        'property-container' => \App\DesignPatterns\Fundamental\PropertyContainer\AboutPattern::class,
        'delegation-pattern' => \App\DesignPatterns\Fundamental\DelegationPattern\AboutPattern::class,
        'event-channel' => \App\DesignPatterns\Fundamental\EventChannel\AboutPattern::class,
        'interface' => \App\DesignPatterns\Fundamental\Interface\AboutPattern::class,
        'abstract-factory' => \App\DesignPatterns\Creational\AbstractFactory\AboutPattern::class,
        'factory-method' => \App\DesignPatterns\Creational\FactoryMethod\AboutPattern::class,
        'singleton' => \App\DesignPatterns\Creational\Singleton\AboutPattern::class,
        'builder' => \App\DesignPatterns\Creational\Builder\AboutPattern::class,
        'lazy-initialization' => \App\DesignPatterns\Creational\LazyInitialization\AboutPattern::class,
        'prototype' => \App\DesignPatterns\Creational\Prototype\AboutPattern::class,
        'adapter' => \App\DesignPatterns\Structural\Adapter\AboutPattern::class,
        'facade' => \App\DesignPatterns\Structural\Facade\AboutPattern::class,
        'bridge' => \App\DesignPatterns\Structural\Bridge\AboutPattern::class,
        'composite' => \App\DesignPatterns\Structural\Composite\AboutPattern::class,
        'decorator' => \App\DesignPatterns\Structural\Decorator\AboutPattern::class,
        'proxy' => \App\DesignPatterns\Structural\Proxy\AboutPattern::class,
        'chain-responsibility' => \App\DesignPatterns\Behavioral\ChainResponsibility\AboutPattern::class,
        'template-method' => \App\DesignPatterns\Behavioral\TemplateMethod\AboutPattern::class,
        'strategy' => \App\DesignPatterns\Behavioral\Strategy\AboutPattern::class,
        'specification' => \App\DesignPatterns\Behavioral\Specification\AboutPattern::class,
        'dto' => \App\DesignPatterns\Other\DTO\AboutPattern::class,
    ];

    /**
     * @throws \Exception
     */
    public function handle(string $url): AboutPattern
    {
        if (!array_key_exists($url, self::$available)) {
//            throw new \Exception('Pattern description does not exist!');
            abort(404);
        }
        return new self::$available[$url]();
    }
}
