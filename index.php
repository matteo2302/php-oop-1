<?php
class Movie{
  public $movieName;
  public $author;
  public $yearOfOriginalPublication;
  public $yearOfPublication;
 

  public function __construct($movieName,$author,$yearOfOriginalPublication,$yearOfPublication){
    $this->movieName = $movieName;
    $this->author = $author;
    $this->yearOfOriginalPublication = $yearOfOriginalPublication;
    $this->yearOfPublication = $yearOfPublication;
  };
  public function getAllYears() {
    return $this->yearOfOriginalPublication + $this->yearOfPublication;
  };

};
$movie = new Movie('Quasi bianca neve', 'fratelli  Grimm', '1938' ,'2023');
$movie2 = new Movie('Cenerentola', 'fratelli  Grimm', '1950' ,'2015');
var_dump($movie getAllYears());
var_dump($movie2 getAllYears());
;
?>