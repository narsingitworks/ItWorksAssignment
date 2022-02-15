<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Overloading</title>
</head>
<body>

	<?php

	
	/*class A
	{
		
		function add($a,$b)
		{
			echo $a+$b;

		}

		function add($a,$b,$c)
		{
			echo $a+$b+$c;

		}
		
	}
	$a=new A();
	$a->add(5,6);
	$a->add(5,6,7);
*/

	class Shape {
      const PI = 3.142 ;
      function __call($name,$arg){
         if($name == 'area')
            switch(count($arg)){
               case 0 : return 0 ;
               case 1 : return self::PI * $arg[0] ;
               case 2 : return $arg[0] * $arg[1];
            }
      }
   }
   $circle = new Shape();
   echo $circle->area(3);
   echo "<br/>";
   $rect = new Shape();
   echo $rect->area(8,6);

	?>
</body>
</html>