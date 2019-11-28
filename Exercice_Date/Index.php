<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Code qui affiche des dates</h1>

<?php
/*  Program: Exercice Date ICT-133
    Author: Gatien Jayme
    Date: 21.11.2019
    Version: 1.0
*/

$timestamp = time(); // Date exercice
// $timestamp = strtotime('17.09.2013'); // Date automatique

// liste ordonne des dates
echo "<ol>";
echo "<li>".date ('l, d F Y', $timestamp)."</li>";
echo "<li>".date ('M ds Y', $timestamp)."</li>";
echo "<li>".date ('d/m/y h:i a', $timestamp)."</li>";
echo "<li>".date ('d M Y, H:i:s', $timestamp)."</li>";
echo "<li>".date ('r', $timestamp)."</li>";
echo "</ol>";
?>


</body>
</html>