<?php
function powerFunction($num, $power){
	$result=1;
	for($x=1; $x<=$power; $x++){
		$result*=$num;
	}
echo "$num power $power is: ".$result;
}

powerFunction(3,5);
?>