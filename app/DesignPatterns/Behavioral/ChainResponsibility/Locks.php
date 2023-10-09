<?php

namespace App\DesignPatterns\Behavioral\ChainResponsibility;

class Locks extends HomeChecker
{
    /**
     * @throws \Exception
     */
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new \Exception('The doors are not locked! Abort it!');
        }

        $this->next($home);
    }
}
