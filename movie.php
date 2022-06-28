<?php

class movie {
    public $name;
    public $genre;
    private $year;

    public function __construct($name, $genre, $_year)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->setYear($_year); 
    }

    public function setYear($_year) {
        return $this->year = $_year;
    }
    public function printYear($film) {
        echo "<h4>$film->year</h4>";
    }
}

?>