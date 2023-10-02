<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge\Contracts;

interface WidgetRealizationInterface
{
    public function getId(): string;

    public function getTitle(): string;

    public function getDescription(): string;
}
