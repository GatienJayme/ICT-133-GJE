<?php
/*  Program: 
    Author: Gatien Jayme
    Date: 19.12.2019
    Version: 
*/
ob_start();

?>

    <h1>Liste des films</h1>
    <table>
        <thead>

        </thead>
        <tbody>
        <?php
        foreach ($listofmovies as $onemovie) {
            echo "<td><tr><li>" . $onemovie['title'] . " " . $onemovie['audio'] . "</li></tr></td>";
        }

        // echo "<li>" . $oneconcert ['band'] . ' ' . "<strong> le " . $oneconcert ['date'] . "</strong></li>";
        ?>
        </tbody>
    </table>
<?php
$content = ob_get_clean();
require_once('gabarit.php');
?>