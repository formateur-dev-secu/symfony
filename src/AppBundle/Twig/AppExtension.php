<?php

namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('transformationCat', [$this, 'transformationCat'])
        ];
    }

    public function transformationCat()
    {
        return 'cat';
    }

    public function transformationDog()
    {
        return 'dog';
    }

    public function getName()
    {
        return "app_extension";
    }
}