<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Property container';
    }

    public function description(): string
    {
        return 'Дозволяє додавати додаткові властивості для класу в контейнер (всередині класу) замість розширення класу новими властивостями.';
    }

    public function example()
    {
        $post = new BlogPost();
        $post->setCategoryId(5);
        $post->setTitle('Футбол Євро 2023');

        echo $this->textFormatter->pGrayText('Стандартний пост об\'єкт');
        dump($post);

        $post->propertyContainer->addProperty('top', true);

        $post->propertyContainer->addProperty('viewCount', 2000);
        $post->propertyContainer->updateProperty('viewCount', 1500);

        $post->propertyContainer->addProperty('rating', 5);
        $post->propertyContainer->deleteProperty('rating');

        echo $this->textFormatter->pGrayText('Пост об\'єкт після добавлення додаткових властивостей через контейнер');
        dump($post);
    }
}
