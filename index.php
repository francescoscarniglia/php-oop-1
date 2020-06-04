<?php
// MOVIE CLASS
class Movie {
  // PROPRIETIES
  public $title;
  public $actors;
  public $director;
  public $genre;
  public $year;
  public $profit;

  // COSTRUCTOR
  public function __construct($_title, $_actors, $_director, $_genre, $_year, $_profit){
    $this->title = $_title;
    $this->actors = $_actors;
    $this->director = $_director;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->profit = $_profit;
  }

  // METHOD
  public function totIncassi($incassi){
    return $this->profit * $incassi / 100;
  }
}

// movie 1
$movie1 = new Movie('Pirates of Silicon Valley', 'Noah Wyle: Steve Jobs, Anthony Michael Hall: Bill Gates,
                  Joey Slotnick: Steve Wozniak, Josh Hopkins: Paul Allen','Martyn Buke','Tech', '1999', 400000);


//  movie 2
$movie2 = new Movie('The Social Network', 'Jesse Eisenberg ,Andrew Garfield,
                   Justin Timberlake, Armie Hammer,
                   Max Minghella', 'Aaron Sorkin', 'Tech', '1999', 600000);
// $movie2->title = 'The Social Network';
// $movie2->actors = 'Jesse Eisenberg ,Andrew Garfield,
//                   Justin Timberlake, Armie Hammer,
//                   Max Minghella';
// $movie2->director= 'Aaron Sorkin';
// $movie2->genre = 'Tech';
// $movie2->year ='2010';

// var_dump($movie1);
// var_dump($movie2);

// MOVIE 1
echo "Titolo: $movie1->title <br>";
echo "Attori: $movie1->actors <br>";
echo "Regista: $movie1->director <br>";
echo "Genere: $movie1->genre <br>";
echo "Anno: $movie1->year <br>";
echo "Incasso: $movie1->profit <br>";
echo "Media 12 mesi: {$movie1->totIncassi(12)} <br>";
echo "Media 6 mesi: {$movie1->totIncassi(6)} <br>";
// MOVIE 2
echo "Titolo: $movie2->title <br>";
echo "Attori: $movie2->actors <br>";
echo "Regista: $movie2->director <br>";
echo "Genere: $movie2->genre <br>";
echo "Anno: $movie2->year <br>";
echo "Incasso: $movie2->profit <br>";


echo "Media 12 mesi: {$movie2->totIncassi(12)} <br>";
echo "Media 6 mesi: {$movie2->totIncassi(6)} <br>";
