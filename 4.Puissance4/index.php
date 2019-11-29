<link rel="stylesheet" href="index.css">
<HTML>
<HEAD>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>

<TABLE>
    <?php
    for ($ligne = 0; $ligne < 8; $ligne++)  // draw one line of the table
    {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++)   // draw one cell of the table
        {
            if ($ligne == 7 && $col == 0) {
                echo "<td><img src='images/bleu.jpg'></td>";
            }
            else if ($ligne == 7 && $col == 6)
            {
                echo "<td><img src='images/rouge.jpg'></td>";
            }
            else{
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>

</TABLE>
</BODY>
</HTML>
