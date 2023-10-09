<?php

namespace App\DesignPatterns\Behavioral\ChainResponsibility;

abstract class HomeChecker
{
    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor): void
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home): void
    {
        if ($this->successor)
        {
            $this->successor->check($home);
        }
    }
}
