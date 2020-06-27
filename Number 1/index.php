<?php

class First{
    public function getClassname()
    {
        echo get_class($this);
    }
    
    public function getLetter()
    {
        echo "A";
    }
    
}

class Second extends First{
    public function getLetter()
    {
        echo "B";
    }
}

$fr = new First;
$fr->getClassname();
$fr->getLetter();

$sc = new Second;
$sc->getClassname();
$sc->getLetter();
