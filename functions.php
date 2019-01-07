<?php
/*
    PP1
    IT328   FullStack WebDev
    Author: Adolfo Gonzalez
    Date:   January 4, 2019

    Filename: functions.php

 */

//function to print array
function printArray($numbers)
{
    foreach ($numbers as $key => $number) {
        echo $number;
    }
}

//function to find the largest number within an array of numbers
function largest($numbers)
{
    $largest=$numbers[0];
    foreach ($numbers as $key => $number) {
        if($number > $largest) {
            $largest = $number;
        }
    }
    return $largest;
}
//function to find the average within an array of numbers
function average($numbers)
{
    $total=0;
    $n=0;
    foreach ($numbers as $key => $number) {
        $total+= $number;
        $n++;
    }
    return $total/$n;
}
//function to remove duplicate values
function removeDups($numbers)
{
    $numbers=array_unique($numbers);
    $numbers=array_values($numbers);
    return $numbers;
}

//add function to count instances of each value within array
function distribution($numbers)
{
    $result=array();
    foreach ($numbers as $key => $number) {
        if(array_key_exists($number,$result)){
            $result[$number]++;
        }
        else{
            $result[$number]=1;
        }
    }
    ksort($result);
    return $result;
}