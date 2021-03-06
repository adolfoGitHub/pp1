<!doctype html>
<!--
    PP1
    IT328   FullStack WebDev
    Author: Adolfo Gonzalez
    Date:   January 4, 2019

    Filename: index.php
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
<?php

    //link to functions
    require "functions.php";

    //array called numbers
    $numbers = array(7,9,8,9,8,8,6);

    //print array
    printArray($numbers);
    echo "<br/><br/>";

    //find the largest
    echo "Largest Number: ". largest($numbers)."<br/>";
    echo "<br/>";

    //find the average
    echo "Average: ". average($numbers)."<br/>";
    echo "<br/>";

    //remove duplicates
    echo "Remove duplicates: ";
    foreach (removeDups($numbers) as $key => $number){
        echo $number;
    }
    echo "<br/><br/>";

    //test distribution function
    echo "Distribution: ";
    foreach (distribution($numbers) as $key => $number){
    echo $key."=>".$number.", ";
    }
    echo "<br/>";
?>



</body>
</html>