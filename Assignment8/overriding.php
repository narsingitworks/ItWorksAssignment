<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Overriding</title>
</head>
<body>

	<?php

	class A{
		function show(){
			echo "This is method of Parent class";
		}
	}

	

	class B extends A
	{
		
		function show()
		{
			echo "This is method of child class";
		}
	}
	$a =new A();
	$a->show();
	echo "<br/>";

	$b=new B();
	$b->show();
	?>
</body>
</html>