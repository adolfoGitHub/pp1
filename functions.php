<?php
//function to print array
function printArray($numbers)
{
    foreach ($numbers as $key => $number) {
        echo $number;
    }
}

//function to find the largest number within an array
function largest($numbers)
{
    $largest=$numbers[0];
    foreach ($numbers as $key => $number) {
        if($number>$largest) {
            $largest = $number;
        }
    }
    return $largest;
}