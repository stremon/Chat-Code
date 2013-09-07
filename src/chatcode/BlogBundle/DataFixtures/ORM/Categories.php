<?php

namespace chatcode\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use chatcode\BlogBundle\Entity\Category;

class Categories implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $names = array('PHP', 'CSS', 'HTML', 'Facebook', 'Javascript', 'SQL', 'Wordpress');
        
        foreach($names as $i=>$name)
        {
            $liste[$i] = new Category();
            $liste[$i]->setName($name);
            
            $manager->persist($liste[$i]);
        }
        $manager->flush();
    }
}