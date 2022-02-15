<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Interface</title>
</head>
<body>
	<?php 

	interface Animal{
		public function intro();
	}

	class Cat implements Animal{
		public function intro(){
			echo "I am Cat";
		}
	}

	class Dog implements Animal{
		public function intro(){
			echo "I am Dog";
		}
	}

	class Mouse implements Animal{
		public function intro(){
			echo "I am Mouse";
		}
	}


	$cat = new Cat();
	$cat->intro();
	echo "<br/>";

	$dog=new Dog();
	$dog->intro();
	echo "<br/>";

	$mouse=new Mouse();
	$mouse->intro();
	echo "<br/>";

	?>

</body>
</html>