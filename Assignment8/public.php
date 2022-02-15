<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifiers</title>
</head>
<body>

<?php
	

	class Car 
	{
		
			public $name;
           

			public function add($a,$b){
				echo $a+$b;
			} 
	}

	$car=new Car();
	$car->name="Swift";
	echo $car->name;
	echo "<br/>";

	$car->add(5,5);
	echo "<br/>";

	class Swift extends Car{

		public function sub($a,$b){
			echo $a-$b;
		}
		
	}
	$swift = new Swift();
	$swift->add(10,10);
	echo "<br/>";
	
	$swift->sub(20,15);
	echo "<br/>";

?>


</body>
</html>