<?php
/*  Program: 
    Author: Gatien Jayme
    Date: 19.12.2019
    Version: 
*/
ob_start();
$listofmovies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
];
?>

    <h1>Liste des films</h1>
<thead>

</thead>
<tbody>
    <?php
    foreach ($listofmovies as $onemovie){
        echo"<td><tr><li>" . $onemovie['title'] . "</li></tr></td>";
    }
    ?>
</tbody>
<?php
$content = ob_get_clean();
?>