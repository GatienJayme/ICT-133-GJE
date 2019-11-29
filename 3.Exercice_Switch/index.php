<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>


<h1>SI-CMI2a</h1>
<ul>
    <?php
    // TODO : Ecrire le php qui remplace le html dans la balise ul ci-dessous
    $tab = array ("Xavier", "Altin", "Samuel", "Christopher", "Kevin", "Dmitri", "Miguel", "Luis", "Mounir", "Fabien");
    for ($i=1; $i <= 9; $i++)
    {
        echo "<li id='div$i'>";
            echo "$tab[$i]";
        echo "</li>";


        /*switch ($i) {
            case 0:
                echo 'Xavier';
                break;
            case 1:
                echo 'Altin';
                break;
            case 2:
                echo 'Samuel';
                break;
            case 3:
                echo 'Chritopher';
                break;
            case 4:
                echo 'Kevin';
                break;
            case 5:
                echo 'Dmitri';
                break;
            case 6:
                echo 'Miguel';
                break;
            case 7:
                echo 'Luis';
                break;
            case 8:
                echo 'Mounir';
                break;
            case 9:
                echo 'Fabien';
                break;
        }

        echo "</li>";*/
    }


    ?>
</ul>

</body>
</html>