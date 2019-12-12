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
echo "<li>$querymonth<br>$year</li>";
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

// Essaier d'afficher les jours avant et après des mois
for ($i = 1; $i <= 2; $i++) {
    echo "$i";
}

// Affichage des dates plus la couleur du jour que l'on ait
echo '<ul class="days">';
for ($days = 1; $days <= 31; $days++) {
    echo "<li>";
    if ($days == date("j", $now)) {
        echo '<span class="active">' . $days . '</span>';
    } else {
        echo "$days";
    }
    echo "</li>";
}
echo "</ul>";

?>

</body>
</html>