<?php

function Factorials($num){
	$factorial=1;
	for($x=$num; $x>=1;$x--){
		$factorial=$factorial*$x;
	}
	echo "Factorial of $num: ".$factorial;
}

Factorials(9);


?>