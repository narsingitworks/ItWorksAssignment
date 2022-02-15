<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inheritance</title>
</head>
<body>
	<?php


	
	class Company {

		

		function company_intro(){
			echo "Our Company Name is Itworks Infotech";
		}
	}

	class Employee extends Company{

		function Employee_intro(){
			echo "Employee Name is ABC";

			
		}


	}

	$employee=new Employee();


	$employee->company_intro();
	echo "<br/>";

	$employee->Employee_intro();

	
		
		

	?>

</body>
</html>