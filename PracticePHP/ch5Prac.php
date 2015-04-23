<html>
	<head><title>Chapter 5 Practice - ARRAYS</title></head>
	<body>
	<?php
	
 		error_reporting(E_ALL);
// ini_set("display_errors", on);
// include("chPrac.php");

		#DEFINING ARRAY
		$array1 = array(1,2,3,4,5);
		$array1[5] = 6;
		echo "<b>Printed using print_r()</b><br>";
		print_r($array1); 
		bbr();
		echo "<b>Printed using var_dump()</b><br>";
		var_dump($array1);
		bbr();

		#ASSOCIATIVE ARRAYS
		$myInfo = array(
					"lname"=>"agustin", 
					"fname"=>"lawrence"
					);
		print_r($myInfo);	bbr();

		#An Empty Array
		$emptyArray=array(); 

		$days = array(1=>"Mon", "Tue", "Wed", "Thu", "Fri");	#becomes Tue = 2, Wed = 3...

		#Adding Values to the End of Array. "Sat" will be added to end of $days
		$days[]="Sat";
		print_r($days);		bbr();

		#Assigning Range of Values to Array
		$num1to5=range(1,5); //creates array containing numbersfrom 1 to 5
		print_r($num1to5);	bbr();

		$charAtoJ=range('A','J');
		print_r($charAtoJ); bbr();

		bbr();
		print('Size of array $charAtoJ is '.count($charAtoJ).'. This is also the same as '.sizeof($charAtoJ));

		bbr();

		#Array Padding
		$scores = array(5, 10);
	    $padded = array_pad($scores, 5, 0);	//1st arg - array; 2nd arg - size to pad, 3rd arg - value to pad
    	// $padded is now array(5, 10, 0, 0, 0)

    	#MultiDim Array
    	$row0 = array(1, 2, 3);
		$row1 = array(4, 5, 6);
		$row2 = array(7, 8, 9);
		$multi = array($row0, $row1, $row2);
		//Accessing value of multiDim array
		$value = $multi[2][0];
		//Interpolating it
		echo("The value at row 2, column 0 is {$multi[2][0]}\n");
		bbr();

		#Copying array values into variables
		$person=array("Fred","Betty");
		list($person1,$person2) = $person;
		echo $person1." ".$person2; bbr();

		print_r($days); br();
		#Slicing an array - extracting only selected
		$selectedDays = array_slice($days, 2, 4);	//2st arg - index to start, 3rd arg - offset value
		print_r($selectedDays); bbr();

		#array_chunk() - divides array into smaller evenly sized array

		#array_keys() - Copying Keys of Array to another array
		$extractedKeys = array_keys($myInfo);

		#array_values() - Copying Values only of Array to another array
		$extractedValues = array_values($myInfo);	

		#array_splice() - review this

		bbr();
		#Converting Array Elements to Variables
		extract($myInfo); //creates $lname and $fname variables
		echo $lname.' '.$fname;		bbr();

		#Converting Variable to Array Elements
		$type1 = "A";
		$type2 = "B";
		$type3 = "C";
		$compactedType = compact("type1","type2","type3");
		print_r($compactedType);

		bbr();

		#Traversing Arrays
		foreach ($days as $value ) {
			echo $value.' ';
		}

		bbr();
		#Traversing Associative Arrays
		foreach ($charAtoJ as $key => $value) {
			echo "<br>".$value; 
		}

		bbr();
		#Calling A Function For Each Array Element - array_walk()
		$callback = function ($value, $key){
		    print("Value: {$value} \tKey: {$key} \n");
		};

		$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
		array_walk($person, $callback);

		#Reducing an Array

		bbr();

		#array_key_exists() - Checking if the key exists in array 
		if(array_key_exists('lname', $myInfo)){
			echo "Existing!";
		}
		else echo "Not Existing!";

		bbr();
		#in_array() - returns true if value is found in the array
		if(in_array("Mon", $days)) echo "Mon is in array ".'$days';	bbr();

		#array_search() - returns the key if found
		echo "lawrence's ".array_search("agustin", $myInfo)." is agustin";	bbr();

		#Sorting indexed arrays - applies to strings and numbers
		$names = array("g","d","h","k","z");
		sort($names); //sorts ascending
		print_r($names);
		br();
		rsort($names);
		print_r($names); bbr();

		#Sorting Strings and Numbers Mixed - use natsort()
		$namesWithNum = array("a1b2","ab32","a3","a4","a5","b1","b2");
		natsort($namesWithNum);
		print_r($namesWithNum); bbr();

		#Reversing array
		$reversedDays = array_reverse($days);
		print_r($reversedDays);	bbr();

		#Reverse key value pair. the key becomes value and the value becomes the key
		$reversedKeyValueMyInfo = array_flip($myInfo);
		print_r($reversedKeyValueMyInfo); bbr();

		#Randomizing Order of Array
		//shuffle($days);
		//print_r($days);

		#getting the value in one array that is not present in another array
		$array3 = array(1,2,3,4);
		$array4 = array(3,4,5);
		$diff = array_diff($array3, $array4); // returns 1 , 2
		print_r($diff);	bbr();

		#SETS 
		#Union
		function arrayUnion($a,$b,&$c){
			$union = array_merge($a,$b);
			$union = array_unique($union);
			$c = $union;
		}

		$d = "";
		arrayUnion($array3, $array4, $d);
		print_r($d); bbr();

		#Intersection
		$intersect = array_intersect($array3, $array4);
		print_r($intersect); bbr();

		#STACK OPERATIONS using Array
		$testStack=array();
		array_push($testStack, 1,2,3,4);
		print_r($testStack);	br();
		array_pop($testStack);
		print_r($testStack); bbr();

		#QUEUE OPERATIONS using Array
		// $testQueue=array();
		// array_shift($testQueue, 1,2,3,4);
		// array_unshift($testQueue, var);

		




	?>


	<?php
		function br(){
			echo "<br>";
		}
		function bbr(){
			echo "<br><br>";
		}
	?>
	</body>
</html>