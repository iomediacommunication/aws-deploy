<?php

namespace App\DataFixtures;

use App\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $todo = new Todo();
            $todo->setTitle('Todo #'.$i);
            $todo->setDescription('Description of the TODO');
            $manager->persist($todo);
        }

        $manager->flush();
    }
}
