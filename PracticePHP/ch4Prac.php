<html>
	<head>
		<title>
			Chapter 4 Practice
		</title>

		<body>
			<?php
				#######################
				#VARIABLE INTERPOLATION
				#######################		
				$a="foo"; $b="bar"; $c=7;
				#Variable Interpolation Ways:	Note: Interpolation doesn't work with single quotes (')
				#1
				echo "$a was $b"; br();
				#2
				echo "You are {$c}th person.";

				#Heredocs - variable with multiline strings as value
$d = <<<EOF
aa
aa
aa
EOF;
				echo $d;

				#echo("a","b","c"); //PARSE error
				$e=array("1st","2nd","3rd");


				br();
				#################
				#PRINTING STRINGS
				#################
				#way 1 
				print("");	#prints only one value: its argument
				#way2
				printf("Hello, %s",$d); #prints a formatted string
				#way3				
				print_r($d); bbr();#prints i
				#way4
				var_dump($e); br();#prints in human readable format
				$f=strlen($a); echo $f; #returns number of characters
				print($a{0}); //prints first character of $a	

				#Trimming Strings
				$stri="      dsd          ";
				$trimmed=trim($stri);
				echo $trimmed;

				strtolower($stri); #returns lowercase
				strtoupper($stri); #returns upper
				ucfirst($stri); #capitalize 1st letter
				ucwords($stri); #capitalize the letter of each word
				br();

				htmlentities("Einstürzende Neubauten"); #outputs string as it is
				htmlspecialchars("Einstürzende Neubauten"); #special characters need not be escaped using this method

				$stripTag=strip_tags("<html></html> <br> <br>"); #removes the tags
				echo $stripTag;

				$metaTags=get_meta_tags("www.google.com");	#returns an array of metatags of the parameter

				#urlEncode() and urlDecode()	encodes spaces as + instead of %20

				addslashes(""); //adds slashes
				stripslashes("");//strip slashes
				bbr();
				###############
				#COMPARING STRINGS
				###############
				$s1="45"; $s2="45";

				$areEqual=strcmp($s1, $s2);
				echo $areEqual;
				bbr();

				######################
				#MANIPULATING STRINGS
				######################
				$sampleString = "I am a sample string...";
				bbr();
				#substr()
				$subSampleStr = substr($sampleString, 0, 7);
				echo $subSampleStr;
				bbr();
				#substr_count()
				echo("$sampleString"." occured ".substr_count($sampleString, $subSampleStr)." times in the string ".'$sampleString');














				function br(){
					echo "<br>";
				}
				function bbr(){
					echo "<br><br>";
				}
			?>
		</body>
	</head>
</html>