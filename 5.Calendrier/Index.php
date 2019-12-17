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
require_once('Function.php');

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

// Affichage des jours avant du mois actuel (dates grisés du début)
echo '<ul class="days">';
getDaysBefore($querymonth, $year);
getDaysAfter($querymonth, $year);
echo "</ul>";

?>

</body>
</html>