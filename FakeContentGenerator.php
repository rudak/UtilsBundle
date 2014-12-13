<?php
namespace Rudak\UtilsBundle;


class FakeContentGenerator
{

    private $wordsList;
    private $tags;
    private $sentence_length;
    private $sentence_number;
    private $final_point;


    public function __construct($s_length = 25, $s_number = 5, $tags = true)
    {
        $this->wordsList       = array();
        $this->tags            = $tags;
        $this->sentence_length = $s_length;
        $this->sentence_number = $s_number;
        $this->final_point     = null;
    }

    public function setDefaultOptions()
    {
        $this->tags            = true;
        $this->sentence_length = 25;
        $this->sentence_number = 5;
        return $this;
    }

    public function getRandSentence()
    {
        $this->setWordList();
        $out = '';
        for ($i = 0; $i < $this->sentence_number; $i++) {
            $out .= $this->makeSentence();
        }
        return $out;
    }

    /**
     * @param boolean $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param int $sentence_length
     */
    public function setSentenceLength($sentence_length)
    {
        $this->sentence_length = $sentence_length;
        return $this;
    }

    /**
     * @param int $sentence_number
     */
    public function setSentenceNumber($sentence_number)
    {
        $this->sentence_number = $sentence_number;
        return $this;
    }

    /**
     * @param mixed $final_point
     */
    public function setFinalPoint($final_point = '.')
    {
        $this->final_point = $final_point;
        return $this;

    }


    private function makeSentence()
    {
        shuffle($this->wordsList);
        $sentence = array_slice($this->wordsList, 0, $this->sentence_length);
        if ($this->tags) {
            return sprintf($this->getSentencePattern(), ucfirst(implode(' ', $sentence)));
        } else {
            return ucfirst(implode(' ', $sentence)) . $this->final_point;
        }
    }

    private function getSentencePattern()
    {
        return "<p>%s" . $this->final_point . "</p>\n";
    }

    private function cleanString($string)
    {
        return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
    }

    private function setWordList()
    {
        if (0 == count($this->wordsList)) {
            $temp = explode(' ', $this->cleanString($this->getBaseSentence()));
            foreach ($temp as $word) {
                $cleanedWord = $this->cleanWord($word);
                if (!empty($cleanedWord) && strlen($cleanedWord) >= 2) {
                    $this->wordsList[] = $cleanedWord;
                }
            }
        }
        shuffle($this->wordsList);
    }

    private function cleanWord($word)
    {
        $word = strtolower(trim($word));
        return $word;
    }

    private function getBaseSentence()
    {
        return 'At the aquarium hospital veterinarians and volunteers have been working 12
         to 16-hour days since mid-November They test the turtles for dehydration give some
         of them X-rays to see if they have pneumonia, treat them with medication if necessary
         and care for them while they start swimming in baby pools and then graduate to larger
         ones Each day the turtles body temperatures are raised 5 degrees Now when the
         turtles are ready to move to be released in Florida or held in other aquariums
         until sea temperatures rise one friendly pilot is no longer enough The Coast Guard
         flew 193 turtles to Florida in November Private planes have carried others. Staff
         members from the National Aquarium in Baltimore drove some turtles from Boston.
         Every aquarium on the East Coast has taken in some of them until they can be
         released later We called in all the favors we can Dr Charles Innis
         director of animal health for the New England Aquarium, said last week. At the
         time, there were about 200 turtles in various stages of recovery at the animal
         hospital the aquarium built and staffed The number of turtles stranded on Cape
         Cod Bay beaches has been increasing for decades, perhaps because conservation
         efforts have been successful for the Kemp’s ridley perhaps because the ocean
         has warmed.But nothing suggested that a year like this would happen Previous
         record years were 1989 with about 100 stranded turtles 1999 when 163 were
         found; and 2012 with 413.Over the years, Mr Prescott said, as the number
         of turtles rescued on the Cape increased, those found on the north shore of
         Long Island decreased This year only 23 had been found in New York by
         early December Black candles dance to an overture But I am drawn past their
         flickering lure To the breathing forest that surrounds the room Where the
         vigilant trees push out of the womb sip the blood-red wine My thoughts weigh
         heavy with the burden  time From knowledge drunk from the fountain of life
          From Chaos born out  love and the scythe The forest beckons with her nocturnal
           call To pull me close amid the baying of wolves Where the bindings of Christ
           are down-trodden with scorn  In the dark odiferous earth We embrace like two
            lovers  death monument to the trapping of breath As restriction is bled
            from the veins of my neck To drop roses on my marbled breast I lust for the
             wind and the flurry  leaves And the perfume of flesh on the murderous breeze
             To learn from the dark and the voices between';
    }
}