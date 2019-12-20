<?php
/*  Program: 
    Author: Gatien Jayme
    Date: 19.12.2019
    Version: 
*/
ob_start();
?>
    <h1>Liste des concerts</h1>
    <ul>
        <?php
        foreach ($listofconcerts as $oneconcert) {
            echo "<li>" . $oneconcert ['band'] . ' ' . "<strong> le " . $oneconcert ['date'] . "</strong></li>";
        }
        ?>
    </ul>
<?php
$content = ob_get_clean();
require_once ('gabarit.php');
?>