<?php

class Hero
{
    // properties
    public $name;
    public $phraseOne;
    public $phraseTwo;
    public $level = 0;


    // methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function set_phraseOne($phrase)
    {
        $this->phraseOne = $phrase;
    }
    function set_phraseTwo($phrase)
    {
        $this->phraseTwo = $phrase;
    }
    function set_Level($newLevel)
    {
        $this->level = $newLevel;
        print_r($this->name. "has reached level ". $this->level);
    }
    function speak($phraseNum)
    {
        if ($phraseNum == 1) {
            print_r($this->phraseOne);
        }
        if ($phraseNum == 2) {
            print_r($this->phraseTwo);
        }
    }

  
}

$kungFuPanda = new Hero();
$kungFuPanda->set_name("Kung Fu Panda ");
$kungFuPanda->set_phraseOne("Skadoosh ");
$kungFuPanda->set_phraseTwo("You have been blinded by pure awesomeness! ");

$spiderMan = new Hero();
$spiderMan->set_name("SpiderMan ");
$spiderMan->set_phraseOne("My Spider-Sense is tingling! ");
$spiderMan->set_phraseTwo(" Your friendly neighbourhood Spiderman! ");

$kungFuPanda->speak(1);
$spiderMan->set_level(69);
$spiderMan->speak(2);

?>
