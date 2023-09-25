<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

class AboutPattern implements \App\DesignPatterns\AboutPattern
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

        $post->propertyContainer->addProperty('top', true);

        $post->propertyContainer->addProperty('viewCount', 2000);
        $post->propertyContainer->updateProperty('viewCount', 1500);

        $post->propertyContainer->addProperty('rating', 5);
        $post->propertyContainer->deleteProperty('rating');

        return $post;
    }
}
