<?php
$book1 = new Litera("Book of fire", );

class Books
{
    public $title, $author, $country, $genre, $year, $n_page;

    public function __construct($title, $author, $country, $genre, $year, $n_page)
    {
        $this->title = $title;
        $this->author = $author;
        $this->country = $country;
        $this->genre = $genre;
        $this->year = $year;
        $this->n_page = $n_page;
    }

    public function shortDesc() {
        echo "this book is bla bla bla";
    }
}

class Litera extends Books{

    public function shortDesc() {
        echo "this book is bla bla bla literature";
    }
}