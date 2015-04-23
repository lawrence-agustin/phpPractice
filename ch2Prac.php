<html>
	<head>
		<title>Practice PHP Programming</title>
	</head>

	<body>
		<?php 

			echo "Hello"; 
		
			###############
			#COMMENTS
			###############
			//comment
			#comment also
			/*comment also*/

			###########
			#DATA TYPES
			###########
			$n = 0;
			is_int($n); #returns true if n is int
			is_float($n); #returns true if float
			is_real($n); # returns true if real
			is_string($n); #returns true if string
			is_bool($n); #returns true if bool
			is_resource($n); #returns true if resource
			is_null($n); #returns true if null

			$var = 'S';	#this is a variable, it is in GLOBAL SCOPE, to make this accessible in a function, 
						#declare it with prefix global
						#Example:
			$x = 0;
		

			$$var = 'SS';	//variable variable
			echo $$var;

			############
			#TYPECASTING
			############
			$g='34';
			$typecasted=(int)$g;


			##########
			#Static Variable
			##########
			function staticVar(){
				static $a=0;
				$a++;
				echo $a;
			}

			staticVar();
			echo $var;

			function br(){
				echo "<br>";
			}

			function bbr(){
				echo "<br><br>";
			}
			

			#################
			#ESCAPE SEQUENCES
			#################
			/*
				\"             Double quotes
				\n             Newline
				\r             Carriage return
				\t             Tab
				\\             Backslash
				\$             Dollar sign
				\{             Left brace
				\}             Right brace
				\[             Left bracket
				\]             Right bracket
				\0 through \777     ASCII character represented by octal value
				\x0 through \xFF     ASCII character represented by hex value
			*/

			$a = 9 - '1';	#this is possible in PHP
			echo $a;

			#STRING CONCATENATION OPERATOR (.)
			$a="concatenated string";
			echo "<br>I am a ".$a;
			br();
			
			#PRE and POST increment operators
			$b=0;
			$c=0;
			echo "PreIncrement - ".++$b; br();	#increments before echo
			echo "PostIncrement - ".$c++; 		#echo before increment
			#Applicable also to strings.
			$d='C';
			echo br().++$d;	

			#####################
			#IF ELSE IF ELSE
			#####################		=== - identical		!=== - not identical
			br();
			$e = 1; $f = 1;
			if($e==$f){ echo "They are equal."; }
			else if($e===$f){ echo "They are identical."; }
			else echo "Error occured.";
			bbr();

			#############
			#&& || XOR
			#############
			if(1==1 && 2==3) echo "True";
			if(1==1 || 2==4) echo "True";
			if(1==1 xor 2==4) echo "True";
			if(!(1==1)) echo "False";
			bbr();

			##################
			#TERNARY OPERATOR
			##################
			$age = 16;
			$ageStr = ($age < 16) ? 'child' : 'adult';
			echo $ageStr;
			bbr();

			##################
			#SWITCH STATEMENT
			##################
			$num=3;
			switch($num){
				case 1:
					echo "Number is ".$num;
					break;
				case 2:
					echo "Number is ".$num;
					break;
				case 3:
					echo "Number is ".$num;
					break;
				default:
					echo "Invalid Input";
			}
			bbr();

			##############	
			#WHILE LOOP
			#############
			$i=1;
			while($i<=10){
				if($i==10){
					break;
					continue;	#for skipping to next test condition
				}
				echo $i." ";
				$i++;
			}
			bbr();

			###############
			#DO-WHILE LOOP
			###############
			$j=10;
			do{
				echo $j." ";
				$j--;
			}
			while($j>0);
			bbr();

			##########
			#FOR LOOP
			##########
			$a=0;
			for($a=0;$a<6;$a++){
				echo $a." ";
			}
			bbr();

			##############
			#FOR EACH LOOP
			##############
			$a=array(1,2,3,4,5,6);
			foreach ($a as $b => $value) {
				echo $value;
			}
			bbr();

		

			





		?>

	</body>
</html>
