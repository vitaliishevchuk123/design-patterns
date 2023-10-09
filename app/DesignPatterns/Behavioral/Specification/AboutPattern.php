<?php

namespace App\DesignPatterns\Behavioral\Specification;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Specification';
    }

    public function description(): string
    {
        return 'Шаблон проектування, який забезпечує структурований і модульний підхід до визначення та комбінування бізнес-правил. Це дозволяє нам інкапсулювати умови в об’єкти специфікації, роблячи наш код більш придатним для обслуговування, повторного використання та тестування.';
    }

    public function example()
    {
        $specification = new CustomerIsGold;
        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        echo $this->textFormatter->pGrayText('Перевірка використовуючи напряму клас специфікації:');
        dump($specification->isSatisfiedBy($goldCustomer));
        dump($specification->isSatisfiedBy($silverCustomer));

        echo $this->textFormatter->pGrayText('Перевірка використовуючи репозиторій:');
        $customers =  new CustomersRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold')
        ]);

        dump($customers->all());

        dump($customers->matchingSpecification(new CustomerIsGold));
    }
}
