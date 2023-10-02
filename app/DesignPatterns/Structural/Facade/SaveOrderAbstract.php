<?php

namespace App\DesignPatterns\Structural\Facade;

abstract class SaveOrderAbstract
{
    protected Order $order;

    protected array $data;

    public function __construct(Order $order, array $data)
    {
        $this->order = $order;
        $this->data = $data;
    }

    public function run(): void
    {
        /**
         * Приклад пізнього і раннього статичного звʼязування:
         * Раннє - self візьметься батьківський метод чи змінна
         * Пізнє - static візьметься метод нащадка чи змінна
         */
        dump(static::class);
//        dump(self::class);
    }
}
