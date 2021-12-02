<?php
    require './classes/Movie.php';

    $fastAndFurious = new Movie("Fast and Furious","people drive cars","Rob Cohen","2001");
    $theImitationGame = new Movie("The Imitation Game","history of calculators","Morten Tyldum","2014");

    $moviesArray = [$fastAndFurious,$theImitationGame];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php-oop-1</title>
  </head>
  <body>
    <?php
        foreach ($moviesArray as $movies => $movie) {
            echo "<h1 style='text-align: center'> title: " . $movie->getTitle() . "</h1>";
            echo "<h5 style='text-align: center'> description: " . $movie->getDescription() . "</h5>";
            echo "<h2 style='text-align: center'> director: " . $movie->getDirector() . "</h2>";
            echo "<h4 style='text-align: center'> year: " . $movie->getYear() . "</h4>";
        }
    ?>
  </body>
</html>