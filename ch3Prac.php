<html>
	<head>
		<title>
			Chapter 3 Practice
		</title>
	</head>

	<body>
		<?php
			function br(){
				echo "<br>"; 
			}
			function bbr(){
				echo "<br><br>";
			}


			###########
			#FUNCTIONS
			###########
			function strcat($left, $right){
				$combinedString = $left.$right;
				return $combinedString;
			}

			#CALLING FUNCTION
			echo strcat("Cat","Dog"); bbr();
			bbr();

			#ACCESSING GLOBAL VARIABLES WITHIN FUNCTIONS
			$x=100;
			echo "Before: {$x}";
			function s(){
				global $x;
				$x = 300;
				//echo "<br>x is now ".$GLOBALS['x'];
				echo "<br>x is now ".$x;
			}
			s();
			bbr();
			
			#STATIC VARIABLES
			function st(){
				static $x=0;
				$x++;
				echo $x."<br>";
			}
			for($i=0;$i<4;$i++){
				st();
			}
			bbr();
			
			#Functions With Default Parameters
			function getCircleArea($r,$PI=3.1415){
				$area = $PI * ($r * $r);
				return $area;

			} 
			
			#Returning Multiple Values in Functions - return an array
			function returnMultipleValues(){
				$x = array(1,2,3,4,5);
				return $x;
			}


			echo "Area of 2 is ".getCircleArea(2);
			br();

			function sample(){
				br();
				echo "Number of parameters passed: ".func_num_args();br();
				echo "First Param: ".func_get_arg(0);br();
				echo "Second Param: ".func_get_arg(1);br();
				echo "Third Param: ".func_get_arg(2);br();
				echo "Fourth Param: ".func_get_arg(3);br();
				echo "Fifth Param: ".func_get_arg(4);br();

				$x=func_get_arg(0); echo $x;

				$x_arr=func_get_args();
				echo $x_arr[4];

			}
			sample(1,2,3,4,5);
			br();

			#Function Pass By Reference 	& - denotes pass by reference
			function getSum($a,$b,&$c){
				$c=$a+$b;
			}
			$i=0;
			getSum(5,5,$i);
			echo "i is ".$i;
			br();

			#Variable Functions
			$var=sample();
			$var();
			
			#Anonymous Function aka CLOSURE
			function(){

			}

		?>
	</body>
</html>