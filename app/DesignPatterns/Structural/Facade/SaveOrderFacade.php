<?php

namespace App\DesignPatterns\Structural\Facade;

class SaveOrderFacade
{
    public function save(Order $order, array $data): bool
    {
        (new SaveOrderDates($order, $data))->run();
        (new SaveOrderProducts($order, $data))->run();
        (new SaveOrderUsers($order, $data))->run();

        return true;
    }
}
