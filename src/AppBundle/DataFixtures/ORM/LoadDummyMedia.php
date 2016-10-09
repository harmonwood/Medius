<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Media;
use AppBundle\Utils\RandomTextGenerator;
use \DateTime;

class LoadDummyMedia extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i<1000; $i++) {
            $media = new Media();
            $media
                ->setTitle(RandomTextGenerator::generateText(mt_rand(1,4)))
                ->setSummary(RandomTextGenerator::generateText(mt_rand(10,20)))
                ->setIsbn('0-'.strval(mt_rand(pow(10, 2), pow(10, 3)-1)).'-'.strval(mt_rand(pow(10, 4), pow(10, 5)-1)).'-'.strval(mt_rand(0,9)))
                ->setPrice(mt_rand(0, 5000)/100)
                ->setPublishedAt(new DateTime('@'.strval(mt_rand(0, time()))))
                ->addAuthor($this->getReference('author-' . strval($i)));

            $manager->persist($media);

        }

        $manager->flush();

    }

    public function getOrder()
    {
        return 2;
    }
}
