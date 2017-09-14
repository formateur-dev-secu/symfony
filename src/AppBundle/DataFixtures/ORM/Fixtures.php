<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->setTitle('post numéros '.$i);
            $post->setContent("lorem ipsum....");
            $post->setPublic(true);
            $manager->persist($post);
        }

        $manager->flush();
    }
}