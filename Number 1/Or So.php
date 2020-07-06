<?php

class First
{
    public static $name = 'First';
    public function getClassname()
    {
        return static::$name;
    }
    
    public function getLetter()
    {
        return 'A';
    }
    
}


class Second extends First
{
    public static $name = 'Second';
    
    public function getLetter()
    {
        return 'B';
    }
    
}

$first = new First;
echo $first->getClassname();
echo $first->getLetter();

$second = new Second;
echo $second->getClassname();
echo $second->getLetter();