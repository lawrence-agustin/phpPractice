<html>
	<head>
		<title>Chapter 6 Practice</title>
	</head>
	<body>
		<?php
			error_reporting(E_ALL);

			#################
			#Defining a class
			#################
			class Person{
				private $name; 
				private $gender; 
				private $age;

			############
			#CONSTRUCTOR
			############
				public function __construct(){
					$this->name = "Law";
					$this->gender = "Male";
					$this->age = 18;
				}

			###########
			#DESTRUCTOR
			###########
				// public function __destruct(){
				// 	echo "A building is destroyed";
				// }

				#Defining functions in class
				public function getName(){
					return $this->name;
				}
				public function getAge(){
					return $this->age;
				}
				public function getGender(){
					return $this->gender;
				}

				#Static Function
				public static function getClassName(){	//to call static functions, Person::getClassName();
					echo "Person";
				}
				
				#Final Methods - Cannot be overridden by subclasses
				final function cantBeOverridden(){}

				#CONSTANTS - works only inside class defintion
				const PI = "3.1415";

			} //end of class


			############
			#INHERITANCE
			############
			class Employee extends Person{
				private $name;
				public function __construct(){ //only constructor of derived class is called, must explicitly call parent class constructor
					parent::__construct();
					$this->name = "Lawrence";
				}

				public function getParentName(){
					#accessing method of parent class
					parent::getClassName();	
				}

				#Overriding a method
				public function getName(){

					echo "Overridden version ".$this->name;
				}
				
			}



			#Instantiating a class
			$p = new Person;

			#Calling a class method
			print("Name: ".$p->getName()."<br>Age: ".$p->getAge()."<br>Gender: ".$p->getGender()); br();
			
			#Calling a class static function
			Person::getClassName();		bbr();

			#CONSTANT - works outside class definition
			define('pi','3.14');
			echo pi;
			bbr();

			#INHERITANCE
			Employee::getParentName();
			$e = new Employee;
			$e->getName();
			bbr();
		?>

		<?php 
			###########
			#INTERFACE
			###########
			interface Printable{
				function printOutput();
			}
			class ImageComponent implements Printable{
				function printOutput(){
					echo "Given functionality";
				}
			}


			##############################
			#ABSTRACT CLASSES AND METHODS
			##############################

			abstract class Component{
				abstract function printOutput();
			}
			class ImageComponents extends Component{
				function printOutput(){
					echo "Pretty Picture";
				}
			}


			##################
			#EXAMINING A CLASS
			##################

			//class_exists()
			$exist = class_exists("Person");bbr();
			var_dump($exist);

			//getting declared classes
			$declaredClass=get_declared_classes(); bbr();

			//checking if class exists in declared classes
			$classExist = in_array("Person", $declaredClass); 
			var_dump($classExist); bbr();

			//getting class methods
			$classMethods = get_class_methods("Person");
			var_dump($classMethods); bbr();

			//getting class variables
			$classVariables = get_class_vars("Employee");
			var_dump($classVariables); bbr();

			//getting parent class of a class
			$parentClass = get_parent_class("Employee");
			var_dump($parentClass);	bbr();

			#####################
			#EXAMINING AN OBJECT
			#####################
			if(is_object($p)){
				$className = get_class($p);
			}
			var_dump($className); bbr();

			#To check if a method exist in class
			$methodExist = method_exists($p,"getName");
			var_dump($methodExist); bbr();





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