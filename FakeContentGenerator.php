<?php
namespace Rudak\UtilsBundle;


class FakeContentGenerator
{

    private $wordsList;


    public function __construct()
    {
        $this->wordsList = array();
    }

    public function getRandSentence($tags = true, $nb = 15)
    {
        $this->setWordList();
        $wordlist = $this->getWordsList();

        return $this->makeSentence($tags, $wordlist, $nb);
    }


    private function makeSentence($tags, $wl, $nb)
    {
        shuffle($wl);
        $sentence = array_slice($wl, 0, $nb);
        if ($tags) {
            return sprintf($this->getSentencePattern(), ucfirst(implode(' ', $sentence)));
        } else {
            return ucfirst(implode(' ', $sentence)) . '.';
        }
    }

    private function getSentencePattern()
    {
        return "<p>%s.</p>\n";
    }

    private function cleanString($string)
    {
        return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
    }

    private function getWordsList()
    {
        return $this->wordsList;
    }

    private function setWordList()
    {
        if (0 == count($this->wordsList)) {
            $temp = explode(' ', $this->cleanString($this->getBaseSentence()));
            foreach ($temp as $word) {
                $cleanedWord = $this->cleanWord($word);
                if (!empty($cleanedWord) && strlen($cleanedWord) > 2) {
                    $this->wordsList[] = $cleanedWord;
                }
            }
        }
    }

    private function cleanWord($word)
    {
        $word = trim($word);
        return $word;
    }

    private function getBaseSentence()
    {
        return 'At the aquarium hospital, veterinarians and volunteers have been working 12
         to 16-hour days since mid-November. They test the turtles for dehydration, give some
         of them X-rays to see if they have pneumonia, treat them with medication if necessary
         and care for them while they start swimming in baby pools and then graduate to larger
         ones. Each day the turtles’ body temperatures are raised 5 degrees.Now, when the
         turtles are ready to move — to be released in Florida or held in other aquariums
         until sea temperatures rise — one friendly pilot is no longer enough. The Coast Guard
         flew 193 turtles to Florida in November. Private planes have carried others. Staff
         members from the National Aquarium in Baltimore drove some turtles from Boston.
         Every aquarium on the East Coast has taken in some of them until they can be
         released later.“We’ve called in all the favors we can,” Dr. Charles J. Innis,
         director of animal health for the New England Aquarium, said last week. At the
         time, there were about 200 turtles in various stages of recovery at the animal
         hospital the aquarium built and staffed.The number of turtles stranded on Cape
         Cod Bay beaches has been increasing for decades, perhaps because conservation
         efforts have been successful for the Kemp’s ridley, perhaps because the ocean
         has warmed.But nothing suggested that a year like this would happen. Previous
         record years were 1989, with about 100 stranded turtles; 1999, when 163 were
         found; and 2012, with 413.Over the years, Mr. Prescott said, as the number
         of turtles rescued on the Cape increased, those found on the north shore of
         Long Island decreased. This year, only 23 had been found in New York by
         early December.';
    }
}