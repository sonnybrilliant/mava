<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Workspace;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWorkSpaces extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $workspace1 = new Workspace();
        $workspace1->setTitle('Writing');
        $workspace1->setDescription('info for writing Workspace');
        $workspace1->setDueDate(new \DateTime('2015-01-01'));
        $manager->persist($workspace1);
        $manager->flush();

        $this->addReference('workspace-writing',$workspace1);

    }

    public function getOrder()
    {
       return 2;
    }
}