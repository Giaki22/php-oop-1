<?php
require "./movie.php";

$films = [
    new movie("Harry Potter", "Fantasy", 2001),
    new movie("Nightmare", "Horror", 1995),
    new movie("Biancaneva", "LGBT", 2023),
    new movie("Titolo", "Genere", 0000),
];

foreach ($films as $film) {
    echo "<h1>$film->name</h1>";
    echo "<h3>$film->genre</h3>";
    $film->printYear($film);
    echo "<hr>";
}

?>