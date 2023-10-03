<?php

namespace App\DesignPatterns\Other\DTO;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Data Transfer Object (DTO)';
    }

    public function description(): string
    {
        return 'Один із шаблонів проектування, що використовується для передачі даних між підсистемами програми. Об’єкт передачі даних не повинен містити будь-якої поведінки.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('/images/patterns/dto.png'));

        $data = [
            'id' => 1,
            'name' => 'Product name',
            'categoryId' => 4,
        ];

        echo $this->textFormatter->pGrayText('Створення DTO через окремий клас фабрику');
        dump(CreateProductDtoFactory::createFromArray($data));

        echo $this->textFormatter->pGrayText('Створення DTO через метод в самій фабриці');
        dump(ProductDto4::createFromArray($data));
    }
}
