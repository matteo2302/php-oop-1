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
  }


  public function getAllYears() {
    return $this->yearOfOriginalPublication . '' . $this->yearOfPublication;
  }

};
$movie = new Movie('Quasi bianca neve', 'fratelli  Grimm', '1938' ,'2023');
$movie2 = new Movie('Cenerentola', 'fratelli  Grimm', '1950' ,'2015');
var_dump($movie->getAllYears());
var_dump($movie2->getAllYears());
var_dump($movie);
var_dump($movie2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Movie Information</h1>
    <ul>
        <li>
            <strong>Movie:</strong> <?php echo $movie->movieName; ?>
        </li>
        <li>
            <strong>Author:</strong> <?php echo $movie->author; ?>
        </li>
        <li>
            <strong>Years:</strong> <?php echo $movie->getAllYears(); ?>
        </li>
    </ul>
    
    <ul>
        <li>
            <strong>Movie:</strong> <?php echo $movie2->movieName; ?>
        </li>
        <li>
            <strong>Author:</strong> <?php echo $movie2->author; ?>
        </li>
        <li>
            <strong>Years:</strong> <?php echo $movie2->getAllYears(); ?>
        </li>
    </ul>
</body>
</html>