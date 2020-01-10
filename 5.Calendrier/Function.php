<?php

function getDaysBefore($querymonth, $year)
{
    // La fonction getDaysBefore sert a écrire le code dans une page à coté pour que le code soit plus propre

    // La variable firstday sert a avoir les dates des premiers jours d'un mois
    $firstday = date("N", strtotime("$year-$querymonth-01"));

    // La variable lastdaylastmonth sert a avoir les dates des jours de fin du mois
    $lastdaylastmonth = date("t", strtotime("-1 month", strtotime("$year-$querymonth-01")));

    // Cette variable sert a afficher les jours grisés des dates au début
    for ($i = $firstday-1; $i > 0; $i--) {
        $daytoprint = $lastdaylastmonth - $i +1;
        echo "<li>" . $daytoprint . "</li>";
    }
}

function getDaysAfter($querymonth, $year)
{
    // La fonction getDaysAfter sert a écrire le code dans une page à coté pour que le code soit plus propre
    $now = time();

    // Savoir combien y a t-il de jours
    $monthdate = "2019-$querymonth-01";

    // En fonction du mois trouvé on utlisera la fonction nbdays pour trouver si le mois à 31 ou 30 jours
    $nbdays = date("t", strtotime($monthdate));

    // La variable firstday sert a avoir les dates des premiers jours d'un mois
    $firstday = date("N",strtotime("$year-$querymonth-01"));

    // Affichage des dates du mois plus la couleur du jour actuel
    for ($days = 1; $days <= $nbdays; $days++) {
        echo "<li>";
        if (($days == date("j", $now)) && ($querymonth == date("m", $now)) && ($year == date("Y", $now))) {
            echo '<span class="active"><strong>' . $days . '</strong></span>';
        } else {
            echo "<strong>$days</strong>";
        }
        echo "</li>";
    }

    // Affichage des jours après ce mois (dates grisés du début du mois)
    $nbda = 2 - (($firstday + $nbdays) % 7);
    var_dump($nbda);
    var_dump($firstday);
    var_dump($nbdays);
    for ($i = 1; $i <= $nbda; $i++) {
        echo "<li>" . $i . "</li>";
    }
}


?>