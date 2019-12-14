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

// $max = strtotime('-1month', $startDate);
$day = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$month = array("Januar", "Februar", "March", "April", "May", "Juni", "July", "August",
    "September", "October", "November", "December");
$querymonth = $_GET ['month'];
$year = $_GET ['year'];
$now = time();

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
$month = "2019-$querymonth-01";
// En fonction du mois trouvé on utlisera la fonction nbdays pour trouver si le mois à 31 ou 30 jours
$nbdays = date("t", strtotime($month));


echo '<ul class="days">';

// Affichage des jours avant du mois actuel
$firstday = date("N", strtotime($year - $querymonth - 01));
$lastdaylastmonth = date("t", strtotime("-1 month", strtotime("$year-$querymonth-01")));

for ($i = $firstday; $i > 0; $i--) {
    $daytoprint = $lastdaylastmonth - $i + 1;
    echo "<li>" . $daytoprint . "</li>";
}

// echo "asdf ".strtotime("-1 month", "$year-$month-01");

// Affichage des dates du mois actuel plus la couleur du jour que l'on ait
for ($days = 1; $days <= $nbdays; $days++) {
    echo "<li>";
    if ($days == date("j", $now)) {
        echo '<span class="active"><strong>' . $days . '</strong></span>';
    } else {
        echo "<strong>$days</strong>";
    }
    echo "</li>";
}

// Affichage des jours après ce mois
$totday = $days + $firstday;
//echo"$totday";

$nbda = $totday%7;
echo"$nbda";

echo "</ul>";

?>

</body>
</html>