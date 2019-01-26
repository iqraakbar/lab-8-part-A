<?php 

function Armstrong($number){ 
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
    
    // if true then armstrong number 
    if ($number == $sum) 
        return 1; 
    
    // not an armstrong number   
    return 0;    
} 

$num=153;
$flag = Armstrong($num); 
if ($flag == 0) 
    echo "$num is not an armstrong number "; 
else
    echo "$num is an armstrong number"
?> 

