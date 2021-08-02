<?php

namespace App\DataFixtures;

use App\Entity\Task as EntityTask;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Task extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1;$i<=10;$i++)
        {
            $task = new EntityTask;
            $task->setName("Task title".$i);
            $task->setDescription("Description title".$i);
            $manager->persist($task);
        }

        $manager->flush();
    }
}
