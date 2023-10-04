<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches;

abstract class AbstractSandwich
{
    public function make(): bool
    {
        $this->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
        return true;
    }

    protected function layBread(): self
    {
        dump('laying down the bread');
        return $this;
    }

    protected function addLettuce(): self
    {
        dump('add some lettuce');
        return $this;
    }

    protected function addSauces(): self
    {
        dump('add oil and vinegar');
        return $this;
    }

    protected abstract function addPrimaryToppings(): self;
}
