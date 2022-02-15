<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Protected</title>
</head>
<body>
	<?php

	class A{
		protected $name="ABC";

		protected function show(){
			echo $this->name;
		}
	}
	
	class B extends A{
		function show1(){
			echo $this->name;
		}

	}
	$b=new B();
	$b->show1();

	?>

</body>
</html>