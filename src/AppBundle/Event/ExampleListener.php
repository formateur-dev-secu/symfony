<?php

namespace AppBundle\Event;

use Doctrine\ORM\Event\LifecycleEventArgs;

class ExampleListener
{
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        die(dump($entity));
    }
}