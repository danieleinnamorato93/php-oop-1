<?php
class Movie {
    public $title;
    public $year;
    public $genre;

    function __construct($_title, $_year , $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }
}
$eraserhead = new Movie("Eraserhead", "1977","grottesco");

$alien = new Movie("Alien","1979","fantascienza");

$her = new Movie("Her", "2013","fantascienza");


//var_dump($eraserhead);
//var_dump($alien);
//var_dump($her);
?>