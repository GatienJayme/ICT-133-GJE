<link rel="stylesheet" href="index.css">
<HTML>
<HEAD>
    <TITLE>Query_String</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>

<?php
    $nameFromQueryString = $_GET['name'];
    $latname = $_GET['lastname'];
    echo "Bonjour $nameFromQueryString";
?>
</BODY>
</HTML>
