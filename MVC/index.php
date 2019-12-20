<?php
require_once ('controller/controller.php');

if (isset ($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$title = 'Accueil';
$content = 'Contenu de la page du Flicage';

switch ($action) {
    case 'movies':
        $title = 'Films';
        showMovies();
        require_once'view/movies.php';
        break;
    case 'concerts':
        $title = 'Concerts';
        showConcerts();
        require_once'view/concerts.php';
        break;
    default:
        $title = 'Home';
        require_once'view/home.php';
        break;
}
require_once 'gabarit.php';
?>
