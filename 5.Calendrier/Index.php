<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>"My Title"</title>
</head>
<body>

<?php
/*  Program: Calendrier
    Author: Gatien Jayme
    Date: 05.12.2019
    Version: 1.0
*/

$day = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$month = array("Januar", "Februar", "March", "April", "May", "Juni", "July", "August",
    "September", "October", "November", "December");
$querymonth = $_GET ['month'];
$year = $_GET ['year'];
$now = time();

function getDaysBefore ($month, $year)
{
    // TODO: Ecrire le code de la fonction

}


// Affichage du mois et de l'année qui change avc la query string
echo '<div class="month">';
echo "<ul>";
echo "<li>" . $month[$querymonth - 1] . "<br>" . $year . "</li>";
echo "</ul>";
echo "</div>";

// Affichage des jours de la semaine
echo '<ul class="weekdays">';
for ($weekdays = 0; $weekdays <= 7; $weekdays++) {
    echo "<li>";
    echo "$day[$weekdays]";
    echo "</li>";
}
echo "</ul>";

// Savoir combien y a t-il de jours
$monthdate = "2019-$querymonth-01";

// En fonction du mois trouvé on utlisera la fonction nbdays pour trouver si le mois à 31 ou 30 jours
$nbdays = date("t", strtotime($monthdate));

// Affichage des jours avant du mois actuel (dates grisés du début)
echo '<ul class="days">';

// La variable firstday sert a avoir les dates des premiers jours d'un mois
$firstday = date("N", strtotime("-1 month", strtotime("$year-$querymonth-01")));

// La variable lastdaylastmonth sert a avoir les dates des jours de fin du mois
$lastdaylastmonth = date("t", strtotime("-1 month", strtotime("$year-$querymonth-01")));

// Cette variable sert a afficher les jours grisés des dates au début
for ($i = $firstday; $i > 0; $i--) {
    $daytoprint = $lastdaylastmonth - $i + 1;
    echo "<li>" . $daytoprint . "</li>";
}

// Affichage des dates du mois plus la couleur du jour actuel
for ($days = 1; $days <= $nbdays; $days++) {
    echo "<li>";
    if ($days == date("j", $now)) {
        echo '<span class="active"><strong>' . $days . '</strong></span>';
    } else {
        echo "<strong>$days</strong>";
    }
    echo "</li>";
}

function getDaysAfter ($month, $year)
{
    // TODO: Ecrire le code de la fonction
}


// Affichage des jours après ce mois (dates grisés du début du mois)
$nbda = 7 - (($firstday + $nbdays) % 7);
for ($i = 1; $i <= $nbda; $i++) {
    echo "<li>" . $i . "</li>";
}

echo "</ul>";

?>

</body>
</html>