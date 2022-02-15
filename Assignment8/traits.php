<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traits</title>
</head>
<body>

   <?php 

	trait message1{
		public function msg1(){
			echo "Hello Traits";
		}
	}

	class A{
		use message1;
	}

	class B{
		use message1;
	}

	$a=new A();
	$a->msg1();
	echo "<br/>";

	$b=new B();
	$b->msg1();
	?>

</body>
</html>