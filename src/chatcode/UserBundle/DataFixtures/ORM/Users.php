<?php

namespace chatcode\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use chatcode\UserBundle\Entity\User;

class Users implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
    }
}