<?php

require("./autoload.php");

use Iterator\Collections\BookCollection;

$books = new BookCollection();
$books->addTitle("Design Patterns");
$books->addTitle("Learn Laravel");
$books->addTitle("C++ Tutorials");
$books->addTitle("Dev tuts");

foreach ($books as $book) {
    echo $book;
}