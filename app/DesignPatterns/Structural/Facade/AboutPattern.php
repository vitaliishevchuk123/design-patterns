<?php

namespace App\DesignPatterns\Structural\Facade;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Facade';
    }

    public function description(): string
    {
        return 'Структурний шаблон проектування, що дозволяє приховати складність системи шляхом зведення всіх можливих зовнішніх викликів до одного об\'єкта, що делегує їх відповідним об\'єктам системи';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/facade.png'));

        $order = new Order();
        $data = request()->all();

        (new SaveOrderFacade())->save($order, $data);
    }
}
