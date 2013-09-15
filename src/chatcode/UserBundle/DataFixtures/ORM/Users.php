<?php

namespace chatcode\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use chatcode\UserBundle\Entity\User;

class Users implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $noms = array('stremon59');
        foreach($noms as $i=>$nom)
        {
            $users[$i] = new User;
            
            $users[$i]->setUsername($nom);
            $users[$i]->setPassword($nom);
            $users[$i]->setEmail('guemann.estelle@gmail.com');
            
            $users[$i]->setRoles(array());
            
            $manager->persist($users[$i]);
        }
        $manager->flush();
    }
}