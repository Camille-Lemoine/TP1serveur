<?php

class Movie
{
    private $name= null;
    private $description='une descritpion';
    private $duration = 120;
    
    public function __construct($name = "")
    {
        $this->name= $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
}

$movie = new Movie("mon film\n");

echo $movie->getName();
$movie->setName("Megashark vs crocosausrus");
echo $movie->getName();
?>
