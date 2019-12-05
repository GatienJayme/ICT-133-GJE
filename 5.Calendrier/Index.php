<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
/*  Program: Calendrier
    Author: Gatien Jayme
    Date: 05.12.2019
    Version: 1.0
*/

$day = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Samedi","Dimanche");
$month = array ("Januar", "Februar", "March", "April", "May", "Juni", "July", "September", "October", "November", "December");
$_GET ['month'];
$_GET ['day'];

echo'<div class="month">';
    echo"<ul>";
        echo"<li>August<br>2017</li>";
    echo"</ul>";
echo"</div>";

for($day = 0, $day < 12, $day++) {

}
echo '<ul class="weekdays">';
echo "<li>Mo</li>";
echo "<li>Tu</li>";
echo "<li>We</li>";
echo "<li>Th</li>";
echo "<li>Sa</li>";
echo "<li>Su</li>";
echo"</ul>";

echo'<ul class="days">';
   echo"<li>1</li>";
   echo"<li>2</li>";
   echo"<li>3</li>";
   echo"<li>4</li>";
   echo"<li>5</li>";
   echo"<li>6</li>";
   echo"<li>7</li>";
   echo"<li>8</li>";
   echo"<li>9</li>";
   echo'<li><span class="active">10</span></li>';
   echo"<li>11</li>";
echo"</ul>";

?>

</body>
</html>

