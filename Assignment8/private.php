<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Private</title>
</head>
<body>

	<?php

	class Demo{
		private $name;

		public function __construct($n){
			$this->name=$n;
			echo $this->name;
		}
	}
	$demo=new Demo("Narsing");
  	


	?>

</body>
</html>