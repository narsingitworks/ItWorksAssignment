<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Abstract</title>
</head>
<body>
	<?php

	abstract class Fruits{

		abstract  function intro();

	}

	class Mango extends Fruits{
		 function intro(){
			return "This is Mango";
		}
	}


	class Apple extends Fruits{
		 function intro(){
			return "This is Apple";
		}
	}

	class Orange extends Fruits{
		 function intro(){
			return "This is Orange";
		}
	}



	$mango = new Mango();
	echo $mango->intro();
	echo "<br/>";

	$apple =new Apple();
	echo $apple->intro();
	echo "<br/>";

	$orange =new Orange();
	echo $orange->intro();

	?>

</body>
</html>