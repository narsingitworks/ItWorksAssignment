<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Demo Class</title>
</head>
<body>
	<?php

	
	class Books 
	{
		public $name;
		public $price;

		function set_name($name){
			$this->name=$name;
		}
		function get_name(){
			return $this->name;
		}

		function set_price($price){
			$this->price=$price;
		}
	    function get_price()
		{
			return $this->price;
		}
		
	}
	$book =new Books();

	$book->set_name("ABC");
	echo $book->get_name();
	echo "<br/>";

	$book->set_price(200);
	echo $book->get_price();
	echo "<br/>";

	?>

</body>
</html>