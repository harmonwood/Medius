<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Author;
use AppBundle\Utils\RandomTextGenerator;

class LoadDummyAuthors extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i<1000; $i++) {
            $author = new Author();
            $author
                ->setFirstName(RandomTextGenerator::generateText(mt_rand(1,1)))
                ->setLastName(RandomTextGenerator::generateText(mt_rand(1,1)));

            $manager->persist($author);

            $this->addReference('author-'. strval($i), $author);
        }

        $manager->flush();

    }

    public function getOrder()
    {
        return 1;
    }
}
