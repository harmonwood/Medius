<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Media;
use \DateTime;

class LoadDummyMedia implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i<1000; $i++) {
            $media = new Media();
            $media
                ->setTitle($this->generateText(mt_rand(1,4)))
                ->setSummary($this->generateText(mt_rand(10,20)))
                ->setIsbn('0-'.strval(mt_rand(pow(10, 2), pow(10, 3)-1)).'-'.strval(mt_rand(pow(10, 4), pow(10, 5)-1)).'-'.strval(mt_rand(0,9)))
                ->setPrice(mt_rand(0, 5000)/100)
                ->setPublishedAt(new DateTime('@'.strval(mt_rand(0, time()))));

            $manager->persist($media);
        }

        $manager->flush();
    }

    /**
     * This function returns a random word.
     *
     * @param int $numberOf how many words to return
     *
     * @return string
     */
    private function generateText( $numberOf = 1 ) {
        $wordList = [
            "recodify",
            "lsd",
            "prenominal",
            "rifle",
            "valiancy",
            "tubal",
            "popularly",
            "selenography",
            "uncrystalled",
            "tabor",
            "supplicant",
            "angulate",
            "harpooner",
            "dowy",
            "elmier",
            "subage",
            "eiffel",
            "arlberg",
            "lingual",
            "extoller",
            "imino",
            "twelve",
            "matriculated",
            "leiomyomas",
            "parentalia",
            "superpatriotic",
            "agouti",
            "brachycephalous",
            "philoetius",
            "costotomy",
            "snuggle",
            "localising",
            "thrown",
            "aldershot",
            "ragtag",
            "primely",
            "indigo",
            "dintless",
            "vitriol",
            "carteret",
            "longbenton",
            "nonreactive",
            "unmanageable",
            "meleager",
            "roundheaded",
            "kearns",
            "carposporic",
            "nonperishing",
            "predebate",
            "admonishment",
            "shredding",
            "milliard",
            "menes",
            "dawdler",
            "misconjecture",
            "plutonium",
            "irregularly",
            "reexamine",
            "splurgy",
            "dewlap",
            "preguided",
            "unmetric",
            "disposure",
            "johnnie",
            "teleplasm",
            "colored",
            "disuniting",
            "chronogrammatically",
            "undespising",
            "twostepped",
            "noncalumniating",
            "septicidal",
            "myrmecological",
            "dowlas",
            "dialogued",
            "numerology",
            "miscalculating",
            "reticulating",
            "quirkily",
            "amphithemis",
            "nondeflation",
            "sillimanite",
            "dost",
            "superhero",
            "deckhouses",
            "epeiric",
            "undyable",
            "mi5",
            "piranesi",
            "resubmerged",
            "teeming",
            "carefreeness",
            "airproof",
            "tropopause",
            "buttinsky",
            "duplicature",
            "albertine",
            "nosh",
            "bubona",
            "spaniard"
        ];

        $phrase = '';
        for($i=0; $i<$numberOf; $i++){
            $phrase .= ' ' . $wordList[array_rand($wordList)];
        }
        return trim($phrase);
    }
}
