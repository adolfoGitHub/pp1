<?php
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
        if($number>$largest) {
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