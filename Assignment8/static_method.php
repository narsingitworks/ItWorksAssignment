<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Static Method</title>
</head>
<body>

	<?php
	
	 class A 
	 {
	 	
	  public static function static_demo()
	 	{
	 		echo "This is Static Method";
	 	}

	 	public function __construct() {
    		self::static_demo();
  		}
	 } 

	 
	A::static_demo();
	echo "<br/>";

	new A();
	echo "<br/>";

	

	?>

</body>
</html>