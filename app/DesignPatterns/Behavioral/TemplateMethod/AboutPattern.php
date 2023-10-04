<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod;

use App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches\TurkeySandwich;
use App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches\VeggieSandwich;
use App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Models\Category;
use App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Models\Product;
use App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Models\StaticPage;
use App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Services\CategoryService;
use App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Services\PageService;
use App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Services\ProductService;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Template method';
    }

    public function description(): string
    {
        return 'Поведінковий патерн проектування, який визначає кістяк алгоритму, перекладаючи відповідальність за деякі його кроки на підкласи. Патерн дозволяє підкласам перевизначати кроки алгоритму, не змінюючи його загальної структури.';
    }

    public function example()
    {
        echo $this->textFormatter->h3White('Використання');
        echo $this->textFormatter->pGrayText('Ви реалізуєте якусь фічу. В якийсь момент ви помітили, що код вашик класів реалізації хоч і відрізняється, але й містить досить багато повторювальних речей. Було б добре позбутися від повторної реалізації алгоритму');

        echo $this->textFormatter->h3White('Рішення');
        echo $this->textFormatter->pGrayText('Патерн Шаблонний метод пропонує розбити алгоритм на послідовність кроків, описати ці кроки в окремих методах і викликати їх в одному шаблонному методі один за одним. Це дозволить підкласам перевизначити деякі кроки алгоритму, залишаючи без змін його структуру та інші кроки, які для цього підкласу не є важливими.');

        echo $this->textFormatter->h3White('Приклад 1: Виготовлення сендвічів');
        echo $this->textFormatter->pGrayText('Для простоти розуміння розглянемо перший приклад, робитимемо сендвічі. Наприклад вегетаріанський і з індички.');
        echo $this->textFormatter->pGrayText('Зрозуміло, що загальна механіка виготовлення сендвіча буде одинакова, тому ми її винесемо у абстрактний клас AbstractSandwich. Метод make абстрактного класу викликатиме інші загальні методи для приготування і серед них абстракний метод addPrimaryToppings(основні інгредієнти конкретного сендвіча) який потрібно буде реалізувати в класі наслідникові реального сендвіча. Також якщо в класі насліднику не потрібно буде якогось методу, то його можна перевизначити, як пустий чи взагалі перевизначити метод make і зробити свою послідовність дій приготування.');
        dump((new TurkeySandwich())->make());
        dump((new VeggieSandwich())->make());

        echo $this->textFormatter->h3White('Приклад 2: Сервіси по збереженню даних в адмінці');
        echo $this->textFormatter->pGrayText('Ще один приклад реалізації, коли нам потрібно зберігати в адмін панелі різні сутності сайту: статичну сторінку, продукт, категорію, банер...');
        echo $this->textFormatter->pGrayText('По-суті все це звичайний CRUD, який наприклад в основну табличку ... зберігає основні дані, в табличку ..._contents зберігає мультимовний контент, в табличку ..._images картинки. Також у всіх сутностей, як правило, є слаг по якому формуватиметься урл відображення на сайті. Тому ми аналогічно можемо створити абстрактний загальний шаблонний сервіс по збереженню даних і сервіси по збереженню продуктів чи категорій вже будуть наслідувати його, щось видозмінюючи на свій лад, або користуватись стандартним збереженням.');
        dump((new PageService())->updateOrCreate(new StaticPage(), []));
        dump((new ProductService())->updateOrCreate(new Product(), []));
        dump((new CategoryService())->updateOrCreate(new Category(), []));
    }
}
