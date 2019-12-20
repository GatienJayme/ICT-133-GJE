<?php
/*  Program: 
    Author: Gatien Jayme
    Date: 20.12.2019
    Version: 
*/
function showConcerts()
{
    require_once('model/concerts.php');

    // Logique
    $listofconcerts[0] = ['band' => 'Concert de moi', 'date' => '2494-12-12'];

    /*    for ($i = 0; $i < count($listofconcert); $i++) {
        if ($listofconcerts['date'] < date("Y-m-d")) {
            unset($listofconcert[$i]);
        }
    }*/

    foreach ($listofconcerts as $i => $listofconcert) {
        if ($listofconcerts['date'] < date("Y-m-d")) {
            unset($listofconcert[$i]);
        }
    }

    require_once('view/concerts.php');
}

function showMovies()
{
    require_once('model/movies.php');

    unset($listofmovies[2]);

    require_once('view/movies.php');
}

?>