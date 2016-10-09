<?php

namespace AppBundle\Utils;

class RandomTextGenerator
{

    /**
     * This function returns a random word.
     *
     * @param int $numberOf how many words to return
     *
     * @return string
     */
    public static function generateText( $numberOf = 1 ) {
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
