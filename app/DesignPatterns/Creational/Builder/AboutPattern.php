<?php

namespace App\DesignPatterns\Creational\Builder;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Builder';
    }

    public function description(): string
    {
        return 'Породжуючий патерн проектування, що дозволяє створювати складні об\'єкти покроково. Будівельник дає можливість використовувати той самий код будівництва для отримання різних об\'єктів.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/builder.png'));

        $builder = new BlogPostBuilder();

        $postFirst = $builder->setTitle('Філософія')
            ->setBody('Таким чином яйце існувало до курки, але початок його існування стався лише в той момент, коли межа між сучасним біологічним видом курки і її видовим попередником була подолана. Навіть якщо таку межу можна чітко визначити, спостерігач не зможе цього помітити, аж допоки з яйця не вилупиться курчатко.')
            ->getBLogPost();
        dump($postFirst);
    }
}
