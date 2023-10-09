<?php

namespace App\DesignPatterns\Behavioral\ChainResponsibility;

class Alarm extends HomeChecker
{
    /**
     * @throws \Exception
     */
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new \Exception('The alarm has not been set! Abort it!');
        }

        $this->next($home);
    }
}
