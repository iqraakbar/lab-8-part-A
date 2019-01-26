<?php
function Arithmetic(){
	if(func_num_args()==0){
		echo "No Variables entered!!. Please enter atleast two numbers"."<br>"."<br>";
	}
	else if(func_num_args()==1){
		echo "One Variable entered!!. Please enter atleast two numbers"."<br>"."<br>";
	}
	else if(func_num_args()==2){
		echo "<b>Two Variables</b>"."<br>";
		$arr=func_get_args();
		$num1= $arr[0];
		$num2=$arr[1];
		$Addition=$num1+$num2;
		$Subtraction=$num1-$num2;	
		$Multiplication=$num1*$num2;
		$Division=$num1/$num2;	
		echo "Addition of $num1 and $num2 is: ".$Addition."<br>";
		echo "Subtraction of $num1 and $num2 is: ".$Subtraction."<br>";
		echo "Multiplication of $num1 and $num2 is: ".$Multiplication."<br>";
		echo "Division of $num1 and $num2 is: ".$Division."<br>"."<br>";
	}
		else if(func_num_args()==3){
		echo "<b>Three Variables</b>"."<br>";
		$arr=func_get_args();
		$num1= $arr[0];
		$num2=$arr[1];
		$num3=$arr[2];
		$Addition=$num1+$num2+$num3;
		$Subtraction=$num1-$num2-$num3;	
		$Multiplication=$num1*$num2*$num3;
		$Division=$num1/$num2/$num3;	
		echo "Addition of $num1, $num2 and $num3 is: ".$Addition."<br>";
		echo "Subtraction of $num1, $num2 and $num3 is: ".$Subtraction."<br>";
		echo "Multiplication of $num1, $num2 and $num3 is: ".$Multiplication."<br>";
		echo "Division of $num1, $num2 and $num3 is: ".$Division."<br>";
	}
}
Arithmetic(); 
Arithmetic(4); 
Arithmetic(4,4);
Arithmetic(4,4,4);
?>